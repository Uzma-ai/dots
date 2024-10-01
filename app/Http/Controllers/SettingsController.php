<?php

namespace App\Http\Controllers;

use App\Models\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    public function index()
    {
        $desktopWallpapers = Wallpaper::where('type', 0)
            ->where('status', 1)
            ->where('created_by', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        $loginWallpapers = Wallpaper::where('type', 1)
            ->where('status', 1)
            ->where('created_by', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('wallpaper', compact('desktopWallpapers', 'loginWallpapers'));
    }
    public function storeWallpaper(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = $request->type == 0
                ? public_path('images/wallpapers/dashboard')
                : public_path('images/wallpapers/login');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            $image->move($destinationPath, $imageName);
            $wallpaper = Wallpaper::create([
                'image' => $imageName,
                'type' => $request->type,
                'status' => 1,
                'created_by' => Auth::id(),
                'default' => 0
            ]);
            $imagePath = $request->type == 0
                ? asset('public/images/wallpapers/dashboard/' . $imageName)
                : asset('public/images/wallpapers/login/' . $imageName);
            return response()->json([
                'success' => true,
                'message' => 'Wallpaper uploaded successfully!',
                'image' => $imagePath,
                'wallpaper_id' => $wallpaper->id,  
                'type' => $request->type
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to upload wallpaper.'
            ]);
        }
    }
    



    public function deleteWallpaper($id)
    {
        $wallpaper = Wallpaper::find($id);

        if (!$wallpaper) {
            return response()->json([
                'success' => false,
                'message' => 'Wallpaper not found.'
            ]);
        }

        $wallpaper->status = 0;
        $wallpaper->save();

        return response()->json([
            'success' => true,
            'message' => 'Wallpaper deleted successfully!'
        ]);
    }
}
