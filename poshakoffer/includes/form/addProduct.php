<?php
	if(! class_exists('AddProduct')) {
		class AddProduct extends Form {
			public function __construct( $parameters = array() ){
                $allowedInputs = ['name', 'price', 'typeProduct', 'sizeS', 'sizeM', 'sizeL', 'sizeXL', 'sizeXXL', 'sizeXXXL', 'description'];
			    foreach ( $allowedInputs as $function ){
                    if ( isset( $parameters[$function] ) ){
                        $value = $parameters[$function];
                        $this -> $function( $value );
                    }
                    else
                        $this -> $function();

                }
			}

			public function name( $value = '' ){
                $this -> textbox("نام محصول", "name", $value, null, "required");
            }

            public function price( $value = 0 ){
                $error = null;
                if ( ! Validation::price( $value ) ) {
                    $error = 'مقدار قیمت نامعتبر است!';
                    $this -> valid = false;
                }
                $this -> number("قیمت", "price", $value, 'تومان', $error, 'required | min = "0" | step = "1000"');
            }

            public function productPicture(){
                $this -> image("تصویر محصول", "productPicture");
            }

            public function typeProduct( $value = 'MTshirt' ){
                $values = [
                    'MTshirt'   =>  'تی شرت مردانه',
                    'Shirt'     =>  'پیراهن مردانه',
                    'MPants'    =>  'شلوار مردانه',
                    'mantle'    =>  'مانتو زنانه',
                    'blouse'    =>  'بلوز و شومیز زنانه',
                    'WTshirt'   =>  'تی شرت زنانه',
                    'WPants'    =>  'شلوار زنانه',
                    'trousers'  =>  'سرهمی زنانه'
                ];
                $this -> select("نوع محصول", "typeProduct", $value, null, null, $values);
			}

            public function sizeS( $value = 'S' ){
                $this -> switche('SMALL', 'sizeProduct[]', $value);
            }

            public function sizeM( $value = 'M' ){
                $this -> switche('MEDIUM', 'sizeProduct[]', $value);
            }

            public function sizeL( $value = 'L' ){
                $this -> switche('LARGE', 'sizeProduct[]', $value);
            }

            public function sizeXL( $value = 'XL' ){
                $this -> switche('X LARGE', 'sizeProduct[]', $value);
            }

            public function sizeXXL( $value = 'XXL' ){
                $this -> switche('XX LARGE', 'sizeProduct[]', $value);
            }

            public function sizeXXXL( $value = 'XXXL' ){
                $this -> switche('XXX LARGE', 'sizeProduct[]', $value);
            }

            public function description( $value = '' ){
                $this -> bigText( "توضیحات", "description", $value);
            }
		}
	}