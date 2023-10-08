<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private $products;
    private static $product, $image, $directory, $imageName;

    public static function newProduct($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'img/uploads/';
        self::$image->move(self::$directory,self::$imageName);

        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category = $request->category;
        self::$product->price = $request->price;
        self::$product->image = self::$directory.self::$imageName;
        self::$product->description = $request->description ;
        self::$product->status = $request->status ;
        self::$product->save();
    }
    public static function updateProduct($request, $id)
        {
            self::$product=Product::find($id);

            if($request->file('image'))
            {
                if(file_exists( self::$product->image))
                {
                    unlink( self::$product->image);
                }
                self::$image = $request->file('image');
                self::$imageName = self::$image->getClientOriginalName();
                self::$directory = 'img/uploads/';
                self::$image->move(self::$directory,self::$imageName);

                self::$product->image =  self::$directory. self::$imageName;
            }

            self::$product->name = $request->name;
            self::$product->category = $request->category;
            self::$product->price = $request->price;
            self::$product->description = $request->description ;
            self::$product->status = $request->status ;
            self::$product->save();

         }
         public static function deleteProduct($id)
         {
             self::$product = Product::find($id);
             if(file_exists(self::$product->image))
             {
                 unlink(self::$product->image);
             }
             self::$product->delete();
         }


    public static function getAllProduct()
    {
        return [
            0 => [
                'id'    => 1,
                'name'  => 'Tonni',
                'reg. no' => '1800111156',
                'img'   => 'img/1.jpg',
                'Department' => 'CSE'
            ],
            1 => [
                'id'    => 2,
                'name'  => 'Sumaiya',
                'reg. no' => '1800111156',
                'img'   => 'img/2.jpg',
                'Department' => 'CSE'
            ],
            2 => [
                'id'    => 3,
                'name'  => 'Shigdha',
                'reg. no' => '1800111156',
                'img'   => 'img/3.jpg',
                'Department' => 'CSE'
            ],
            3 => [
                'id'    => 4,
                'name'  => 'Nova',
                'reg. no' => '1800111156',
                'img'   => 'img/4.jpg',
                'Department' => 'CSE'
            ],
            4 => [
                'id'    => 5,
                'name'  => 'Salehin',
                'reg. no' => '1800111156',
                'img'   => 'img/5.jpg',
                'Department' => 'CSE'
            ]
        ];
    }
    public static function getProductById($id)
    {
        foreach(self::getAllProduct() as $product)
        {
            if($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}
