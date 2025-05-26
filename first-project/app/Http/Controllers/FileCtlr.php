<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileCtlr extends Controller
{
    function uploadFile(Request $req)
    {
        $req->validate([
            'userfile' => 'required|file|mimes:jpg,docx,pdf|max:2048',
        ]);
        $filename = time() . '_' . $req->file('userfile')->getClientOriginalName();

        
        // $path = $req->file('userfile')->store(); // or store('') stores in storage/app/private
        
        // $path = $req->file('userfile')->store('uploads'); // stores in storage/app/private/uploads

        // $path = $req->file('userfile')->store('','public'); // stores in storage/app/public
        
        $path = $req->file('userfile')->store('uploads','public'); // stores in storage/app/public/uploads

        // storeAs() works same except it takes the filename as parameter in middle.
        return view('file-display', ['filePath' => $path]);
    }
}

// To access the stored files from browser publicly, we can use the following command:
// php artisan storage:link
// This creates a symbolic link from public/storage to storage/app/public (not a copy, just a pointer).

// USE CASE FOR DEVELOPERS:

// To serve user-uploaded files easily and efficiently
    // Websites often allow users to upload images, documents, or other files. These files need to be accessible by visitors — for example: Profile pictures, Downloadable PDFs etc.

    // Since Laravel stores files outside the web root for security, the developer needs a safe, straightforward way for these files to be served publicly.

    // storage:link creates a shortcut so the web server can directly serve files without extra work.

    // the path of the file is stored in the database, and the file is stored on the disk.
