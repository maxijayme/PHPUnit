<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ProfileTest extends TestCase
{
    
    public function testUpload(): void
    {
        Storage::fake('local');

        $response = $this->post('profile',[
            'photo' => $photo = UploadedFile::fake()->image('photo.png')
        ]);

        $exists = Storage::disk('local')->exists("profiles/{$photo->hashName()}");
        $this->assertTrue($exists);        

        $response->assertRedirect('profile');
        
    }
}
