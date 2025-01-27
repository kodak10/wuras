<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Générer le sitemap pour le site.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'));
        $sitemap->add(Url::create('/magasin')->setPriority(0.8)->setChangeFrequency('monthly'));

        // Ajouter des URLs dynamiques (exemple pour les articles)
        $articles = \App\Models\Article::all();
        foreach ($articles as $article) {
            $sitemap->add(Url::create('/articles/' . $article->slug)
                ->setPriority(0.7)
                ->setChangeFrequency('weekly'));
        }

        // Générer le fichier sitemap.xml
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap généré avec succès !');


    }
}
