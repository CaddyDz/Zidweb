<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class DownloadsController extends Controller
{
	/**
	 * Download the specified file.
	 *
	 * @param string $filename
	 * @return \Illuminate\Http\Response
	 */
	public function download(string $filename)
	{
		if (Storage::disk('public')->exists($filename)) {
			return response()->download($filename);
		}
		return abort(404);
	}
}
