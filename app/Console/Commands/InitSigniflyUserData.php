<?php

namespace App\Console\Commands;

use App\Models\Skill;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class InitSigniflyUserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:signifly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull from the signifly api, and create users based on the response';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        try {
            $response = Http::withToken(env('SIGNIFLY_TOKEN'))->get('https://application.signifly.app/api/employees');
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }

        foreach ($response->json() as $user) {
            User::create([
                'name' => $user['name'],
                'title' => $user['title'],
                'phone' => $user['phone']['DK'], // TODO:: I default to danish phone right now
                'email' => $user['email'],
                'profile_photo_path' => $user['photo_url'],
                'joined_at' => $user['joined'],
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ]);
            $this->info('created: ' . $user['name']);
        }

        $skills = ['Vue', 'React', 'PHP', 'Laravel', 'Symfony', 'Java'];

        foreach ($skills as $skill) {
            for ($i = 1; $i <= 5; $i++) {
                Skill::create(['name' => $skill, 'level' => $i]);
            }
        }

        foreach (Skill::all() as $skill) {
                $skill->users()->attach($skill->id); // Hacky way to give random skills
        }

        return 0;
    }
}
