<?php
if(! class_exists('Form')) {
	class Form {
        public $valid = true;

        var $inputArray = [];
	    private function template( $input, $helper = null, $error = null ){
            $output = <<< EOT
                <section class="mb-3">
                    {$input}
EOT;
            if ( isset($helper) )
                $output .= <<<EOT
                    <section class = "text-muted">{$helper}</section>
EOT;
                $output .= <<<EOT
					<section class = "text-danger">{$error}</section>
                </section>
EOT;
            $this -> inputArray[] = $output;
        }

        private function text($type = 'text', $label, $name, $value, $helper, $error = null, $options){
            if( ! isset($name) )
                $name = $type;
            if( ! isset($label) )
                $label = $name;
            $optionsArray = explode( '|', $options );
            $options = implode(' ', $optionsArray);
            $output = <<< EOT
                    <label for = "{$name}"  class = "form-label">{$label}</label><br>
                    <input type = "{$type}" name = "{$name}" id = "{$name}" value = "{$value}" class = "form-control" {$options}>
EOT;
            $this -> template( $output, $helper, $error );
        }

        private function checkbox($type = 'checkbox', $label, $name, $value, $helper, $options){
            if( ! isset($name) )
                $name = $type;
            if( ! isset($label) )
                $label = $name;
            $output = <<< EOT
                    <input type = "{$type}" name = "{$name}" id = "{$name}" value = "{$value}" class = "form-check-input" {$options}>
                    <label for = "{$name}"  class = "form-check-label">{$label}</label>
EOT;
            $this -> template( $output, $helper );
        }

        public function bigText($label = null, $name, $value = '', $helper = null, $options = '' ){
            if( ! isset($label) )
                $label = $name;
            $output = <<< EOT
					<label for = "{$name}" class = "form-label">{$label}</label><br>
					<textarea name = "{$name}" id = "{$name}" class = "form-control" {$options}>{$value}</textarea>
EOT;
            $this -> template( $output, $helper );
        }

        public function select($label = null, $name, $value = '', $helper = null, $options = '', $values = array() ){
            $error = null;
            if( ! isset($label) )
                $label = $name;

            $output = <<< EOT
					<label for = "{$name}" class = "form-label">{$label}</label><br>
					<select name = "{$name}" id = "{$name}" class = "form-control">
					{$value}
EOT;
            foreach($values as $valuesKey => $valuesValue){
                $selected = '';
                if( $value === $valuesKey )
                    $selected = 'selected';
                $output .= <<< EOT
						<option value = {$valuesKey} {$selected} id="{$valuesKey}">{$valuesValue}</option>
EOT;
            }
            $output .= '
					</select>
			';
            $this -> template( $output, $helper, $error );
        }

        public function textbox( $label = null, $name = null, $value = '', $helper = null, $options = '' ){
            $error = null;
            $this -> text('text', $label, $name, $value, $error, $helper , $options);
        }

        public function number( $label = null, $name = null, $value = 0, $helper = null, $error = null, $options = '' ){
	        if ( ! Validation::number( $value ) )
	            $error = 'مقدار باید یک عدد صحیح باشد!';
            $this->text('number', $label, $name, $value, $helper, $error, $options);
        }

        public function email($label = null, $name = null, $value = '', $helper = null, $options = ''){
            $error = null;
	        $options = 'required | pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" | title = "الگوی مناسب وارد کنید"';
            $this -> text('email', $label, $name, $value, $error, $helper, $options);
        }

        public function password($label = null, $name = null, $value = '', $helper = null, $options = ''){
            $error = null;
	        $this -> text('password', $label, $name, $value, $helper, $error, $options);
        }

        public function date( $label = null, $name = null, $value = '', $helper = null, $options = '' ){
            $error = null;
	        $this -> text('date', $label, $name, $value, $error, $helper, $options);
        }

        public function time( $label = null, $name = null, $value = '00:00', $helper = null, $options = '' ){
            $error = null;
	        $this -> text('time', $label, $name, $value, $error, $helper, $options);
        }

        public function switche($label = null, $name = null, $value = 'true', $helper = null, $options = ''){
            $error = null;
            $this -> checkbox('checkbox', $label, $name, $value, $helper, $options);
        }

        public function image( $label = null, $name = null, $value = '', $helper = null, $options = '' ){
            $error = null;
            $this -> text('file', $label, $name, $value, $error, $helper, $options);
        } // accept = 'image/jpeg, image/gif, ...' | 'image/*'

        private static function csrf(){
            $token = Validation :: tokenGenerator();
            $_SESSION['csrf_token'] = $token;
            $output = <<< EOT
				<input type = 'hidden' name = 'csrf_token' value = '{$token}'><br>
EOT;
            return $output;
        }

        public function __toString(){
            $output = <<< EOT
                <form action = "" method = "post" enctype = "multipart/form-data">
EOT;
                $output .= self::csrf();
                foreach ($this -> inputArray as $inputString)
                    $output .= $inputString;
            $output .= <<< EOT
                    <input type = "submit" name = "submit" value = "ثبت" class="btn btn-primary">
                </form>
EOT;
            return $output;
        }
	}
}

include 'register.php';
include 'addProduct.php';