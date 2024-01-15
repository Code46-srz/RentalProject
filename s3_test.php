<?php

require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create an S3Client
$s3client = new S3Client([
    'region' => env('AWS_DEFAULT_REGION'),
    'version' => env('AWS_VERSION'),
    'credentials' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
    ],
]);

// Specify the bucket name
$bucketName = env('AWS_BUCKET');

try {
    // List the objects in the bucket
    $result = $s3client->listObjects([
        'Bucket' => $bucketName,
    ]);

    // Output the object keys
    foreach ($result['Contents'] as $object) {
        echo $object['Key'] . "\n";
    }
} catch (AwsException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
