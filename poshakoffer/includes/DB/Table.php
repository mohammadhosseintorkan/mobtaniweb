<?php
	if(! class_exists('Table')) {
		class Table
		{
			static protected function columnsList( $vars, $sep = ', ' ){
				$columns = array_keys( $vars );
				return join($sep , $columns);
			}
			static protected function valuesList( $vars, $sep = "', '" ){
				$values = array_values( $vars );
				return "'" . join($sep , $values) . "'";
			}
            static protected function columnValuesList( $params, $sep = ', ' ){
                foreach ($params as $key => $value){
                    $varPairs[] = "{$key} = '{$value}'";
                }
                return join($sep , $varPairs);
            }


			static public function add( $params ){
			    $params['status'] = 'default';
				$columnsString = self::columnsList( $params );
				$valuesString = self::valuesList( $params );
				$tableName = static::class;
				
				$sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
				$result = $GLOBALS['db'] -> execute( $sql );


				if( isset($result) )
					Alert::alerts("{$tableName} با موفقیت ثبت شد!", 'success');
                return $result;
			}

			static public function update( $params ){

                $columnValuesList = self::columnValuesList( $params );

                $tableName = static::class;

                $sql = "UPDATE {$tableName}
                        SET {$columnValuesList}
                        WHERE id = {$params['id']}";
                $result = $GLOBALS['db'] -> execute( $sql );


                if( isset($result) )
                    Alert::alerts("{$tableName} با موفقیت ویرایش شد!", 'success');
			}

			static public function delete($id){
                $tableName = static::class;
                $sql = "UPDATE {$tableName}
                        SET status = 'deleted'
                        WHERE id = {$id}";

                $result = $GLOBALS['db'] -> execute( $sql );

                if( isset($result) )
                    Alert::alerts("{$tableName} با موفقیت حذف شد!", 'success');
            }

			static public function find($where = 'TRUE', $order = 'id DESC', $count = 10000, $offset = 0){
                $tableName = static::class;
                $sql = "SELECT * FROM {$tableName}
			            WHERE {$where} AND status != 'deleted'
			            ORDER BY {$order}
			            LIMIT {$offset}, {$count}";
                $table = $GLOBALS['db'] -> execute( $sql );
                return $table;
            }

            static public function join($where = 'TRUE', $order = 'id DESC', $count = 10000, $offset = 0, $joinedTable = 'User'){
                $tableName = static::class;
                $sql = "SELECT * FROM {$tableName}, {$joinedTable}
			            WHERE {$joinedTable}.{$tableName}id = {$tableName}.id
                        AND {$where}
			            AND {$tableName}.status != 'deleted'
			            ORDER BY {$tableName}.{$order}
			            LIMIT {$offset}, {$count}";
                $table = $GLOBALS['db'] -> execute( $sql );
                return $table;
            }
		}
	}
?>