<?php

declare(strict_types=1);

namespace App\Http\Controllers;


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
		return response()->download($filename);
	}
}
