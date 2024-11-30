<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Ordinateur'],
            ['name' => 'Fourniture de bureau'],
            ['name' => 'Imprimante et accessoire'],
            ['name' => 'Console de jeux'],
            ['name' => 'Télévision'],
            ['name' => 'Smartphone'],
            ['name' => 'Accessoires informatiques'],
            ['name' => 'Maison et cuisine'],
            ['name' => 'Vêtements'],
            ['name' => 'Chaussures'],
            ['name' => 'Bijoux et montres'],
            ['name' => 'Santé et beauté'],
            ['name' => 'Sports et loisirs'],
            ['name' => 'Automobile'],
            ['name' => 'Musique et instruments'],
        ]);
        
        Tag::insert([
            ['tag_name' => 'Éducation', 'created_at' => now(), 'updated_at' => now()],
            ['tag_name' => 'Technologie', 'created_at' => now(), 'updated_at' => now()],
            ['tag_name' => 'Santé', 'created_at' => now(), 'updated_at' => now()],
            ['tag_name' => 'Voyage', 'created_at' => now(), 'updated_at' => now()],
            ['tag_name' => 'Finance', 'created_at' => now(), 'updated_at' => now()],
            ['tag_name' => 'Divertissement', 'created_at' => now(), 'updated_at' => now()],
            ['tag_name' => 'Sport', 'created_at' => now(), 'updated_at' => now()],
            ['tag_name' => 'Art', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Récupérer toutes les catégories et tags
        $categories = Category::all();
        $tags = Tag::all();

        // Créer 100 articles
        Article::factory()->count(100)->create()->each(function ($article) use ($categories, $tags) {
            // Associer des catégories à l'article
            $article->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray() // Attache 1 à 3 catégories aléatoires
            );

            // Associer des tags à l'article
            $article->tags()->attach(
                $tags->random(rand(1, 5))->pluck('id')->toArray() // Attache 1 à 5 tags aléatoires
            );

            // Ajouter des variations aléatoires
            DB::table('article_variation')->insert([
                [
                    'article_id' => $article->id,
                    'type' => 'Couleur',
                    'value' => fake()->colorName(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'article_id' => $article->id,
                    'type' => 'Taille',
                    'value' => fake()->randomElement(['S', 'M', 'L', 'XL']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);

            // Générer des images fictives pour l'article
            $imagePaths = [];
            for ($i = 0; $i < rand(1, 3); $i++) {
                // Ici on génère un nom d'image fictif
                $imageName = 'articles-' . $article->id . '.jpg';

                // Simuler l'upload d'images (ici on utilise la méthode de stockage de Laravel)
                Storage::disk('public')->put('images/articles/' . $imageName, file_get_contents('https://via.placeholder.com/300x300.png?text=Image+' . ($i + 1))); // Image générée avec un placeholder

                // Enregistrer le chemin de l'image dans le tableau
                $imagePaths[] = $imageName;
            }

            // Associer les images à l'article via la table pivot
            foreach ($imagePaths as $imagePath) {
                DB::table('product_image')->insert([
                    'article_id' => $article->id,
                    'image_path' => 'images/articles/' . $imagePath,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
