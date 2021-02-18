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
		$disk = Storage::disk('public');
		if ($disk->exists($filename)) {
			return $disk->download($filename);
		}
		return abort(404);
	}
}
