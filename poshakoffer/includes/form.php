<?php
if(! class_exists('Form')) {
	class Form {
        var $inputArray = [];
	    private function template( $input, $helper = null){
            $output = <<< EOT
                <section class="mb-3">
                    {$input}
EOT;
            if ( isset($helper) )
                $output .= <<<EOT
                    <section class = "text-muted">{$helper}</section>
EOT;
                $output .= <<<EOT
					<section class = "text-danger"></section>
                </section>
EOT;
            $this -> inputArray[] = $output;
        }

        private function text($type = 'text', $label, $name, $value, $helper, $options){
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
            $this -> template( $output, $helper );
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
            $this -> template( $output, $helper );
        }

        public function textbox( $label = null, $name = null, $value = '', $helper = null, $options = '' ){
            $this -> text('text', $label, $name, $value, $helper , $options);
        }

        public function number( $label = null, $name = null, $value = 0, $helper = null, $options = '' ){
            $this->text('number', $label, $name, $value, $helper, $options);
        }

        public function email($label = null, $name = null, $value = '', $helper = null, $options = ''){
            $options = 'required | pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" | title = "الگوی مناسب وارد کنید"';
            $this -> text('email', $label, $name, $value, $helper, $options);
        }

        public function password($label = null, $name = null, $value = '', $helper = null, $options = ''){
            $this -> text('password', $label, $name, $value, $helper, $options);
        }

        public function date( $label = null, $name = null, $value = '', $helper = null, $options = '' ){
            $this -> text('date', $label, $name, $value, $helper, $options);
        }

        public function time( $label = null, $name = null, $value = '00:00', $helper = null, $options = '' ){
            $this -> text('time', $label, $name, $value, $helper, $options);
        }

        public function switche($label = null, $name = null, $value = 'true', $helper = null, $options = ''){
            $this -> checkbox('checkbox', $label, $name, $value, $helper, $options);
        }

        public function image( $label = null, $name = null, $value = '', $helper = null, $options = '' ){
            $this -> text('file', $label, $name, $value, $helper, $options);
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

/*

*/