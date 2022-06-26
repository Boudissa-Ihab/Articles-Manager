<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Throwable;

class Settings extends Component
{
    use WithFileUploads;

    public $appName;
    public $email;
    public $description;
    public $logo;
    public $facebook;
    public $instagram;
    public $twitter;
    public $linkedin;
    public $youtube;
    public $zotero;
    public $temporaryLogo;
    const FOLDER = "logo/";

    public function mount()
    {
        $this->appName = setting('app_name') ?? "";
        $this->email = setting('email') ?? "";
        $this->description = setting('description') ?? "";
        $this->facebook = setting('facebook_link') ?? "";
        $this->instagram = setting('instagram_link') ?? "";
        $this->twitter = setting('twitter_link') ?? "";
        $this->linkedin = setting('linkedin_link') ?? "";
        $this->youtube = setting('youtube_link') ?? "";
        $this->zotero = setting('zotero_link') ?? "";
        $this->temporaryLogo = setting('logo');
    }

    public function save()
    {
        try {
            setting([
                'app_name' => $this->appName ?? "",
                'email' => $this->email ?? "",
                'description' => $this->description ?? "",
                'facebook_link' => $this->facebook ?? "",
                'instagram_link' => $this->instagram ?? "",
                'twitter_link' => $this->twitter ?? "",
                'linkedin_link' => $this->linkedin ?? "",
                'youtube_link' => $this->youtube ?? "",
                'zotero_link' => $this->zotero ?? ""
            ]);
            if($this->logo)
            {
                $webpImage = Image::make($this->logo)->encode('webp');
                $storeImage = Storage::put(self::FOLDER ."Logo.webp", $webpImage->__toString());
                if($storeImage)
                    setting(['logo' => "Logo.webp"]);
            }
            setting()->save();

            alert()->success("Paramètres enregistrés avec succès");
            return redirect()->route('admin.settings');
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue lors de l'enregistrement des paramètres");
        }
    }

    public function render()
    {
        return view('livewire.admin.settings');
    }
}
