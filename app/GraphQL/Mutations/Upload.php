<?php

namespace App\GraphQL\Mutations;

use Illuminate\Http\UploadedFile;

class Upload
{
    const DOCS_FOLDER = "docs";
    const IMAGE_FOLDER = "images";

    /**
     * Upload a file, store it on the server and return the path.
     *
     * @param  mixed  $root
     * @param  mixed[]  $args
     * @return string|null
     */
    public function resolve($root, array $args): ?string
    {
        /** @var \Illuminate\Http\UploadedFile $file */
        if( !empty( $args["files"] ) )
        {
            foreach ($args["files"] as $file) 
            {
                $file->storePubliclyAs('public/'. $this->getFolderName( $file ) , $file->getClientOriginalName() );
            }
        }

        return 'Files created';
    }

    private function getFolderName( $file ): string {
        $extension = strtolower( $file->getClientOriginalExtension() );

        switch ($extension) {
            case 'bmp':
            case 'eps':
            case 'gif':
            case 'jpg':
            case 'jpeg':
            case 'tif':
            case 'tiff':
            case 'png':
            case 'psd':
            case 'svg':
                return self::IMAGE_FOLDER;
                break;
            default:
                return self::DOCS_FOLDER;
                break;
        }

        return $folderName;
    }
}