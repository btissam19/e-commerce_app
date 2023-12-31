<?php
namespace App\Http\Controllers\profile;
use OpenAI\Laravel\Facades\OpenAI;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\updateAvatarRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AvatarController extends Controller
{
    public function update( updateAvatarRequest $request){
     $path = Storage::disk('public')->put('avatars', $request->file('avatar'));
      if ($oldAvatar = $request->user()->avatar) {
          Storage::disk('public')->delete($oldAvatar);
      }
      auth()->user()->update(['avatar' => $path]);
      return redirect(route('profile.edit'))->with('message', 'Avatar is updated');
    }




    public function generate(Request $request){
        $result = OpenAI::images()->create([
       'prompt' => "create avatar for user with a nice animated images".auth()->user()->name,
       'n' => 1,
       'size' => "256x256",
    ]);

    $contents=file_get_contents($result->data[0]->url);
    $filename = Str::random(25);
    Storage::disk('public')->put("avatars/$filename.jpg", $contents);
    if ($oldAvatar = $request->user()->avatar) {
      Storage::disk('public')->delete($oldAvatar);
  }

    auth()->user()->update(['avatar' => "avatars/$filename.jpg"]);
    return redirect(route('profile.edit'))->with('message', 'Avatar is updated');
    }
}