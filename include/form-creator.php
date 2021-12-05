<?php
    class FormCreator {
        private $action;
        private $method;
        private $enctype;

        function __construct($action, $method="post", $enctype=null) {
            $this->action = $action;
            $this->method = $method;            
            $this->enctype = $enctype;            
        }

        // déclaration des méthodes
        public function begin() {
            ?>
            <form action="<?=$this->action?>" method="<?=$this->method?>"          
            
            <?php if(isset($this->enctype)): ?>
                enctype="<?=$this->enctype?>"
            <?php endif ?>
            >
            <div>
            <?php
        }

        public function input($name, $valeur, $options = []) {
            $options = array_merge([
                "type" => "text",
                "id" => str_replace(' ', '-', strtolower($name)),
                "label" => ucfirst($name),
                "required" => 'required',
                "placeholder" => " ",
                "min" => '1950-01-01',
                "max" => "2009-01-01",
                "cols" => 30,
                "rows" => 10,
                "maxlenght" => 999999,
                "pattern" => null,
                "accept" => "image/png, image/jpeg",
                "values" => [],                
            ], $options);

            switch ($options['type']) {
                case 'checkbox':
                    ?>
                    <div id="<?=$options['id']?>">
                        <h4><?=$options['label']?></h4>
                    <?php foreach ($options['values'] as $value):
                    ?>
                        <div class="check-group">
                            <input type="<?=$options['type']?>" name="<?=$name?>[]" value="<?=$value?>" id="<?=$value?>"> 
                            <label for="<?=$value?>"><?=ucfirst($value)?></label> 
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <?php
                    break;

                case 'radio':
                    ?>
                    <div id="<?=$options['id']?>">
                        <h4><?=$options['label']?></h4>
                    <?php foreach ($options['values'] as $key => $value):
                    ?>
                        <div class="check-group">
                            <input type="<?=$options['type']?>" name="<?=$name?>" value="<?=$value?>" id="<?=$value?>" <?php if($key == sizeof($options['values']) - 1) echo 'checked'?>> 
                            <label for="<?=$value?>"><?=ucfirst($value)?></label> 
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <?php
                    break;

                case 'color':
                    ?>
                    <h4><label for="<?=$options['id']?>"><?=$options['label']?></label></h4>
                    <input type="<?=$options['type']?>" name="<?=$name?>" id="<?=$options['id']?>" value="<?=$valeur?>" <?=$options['required']?>>
                    <?php
                    break;

                case 'textarea':
                    ?>
                    <label for="<?=$options['id']?>"><?=$options['label']?></label>
                    <textarea name="<?=$name?>" id="<?=$options['id']?>" maxlength="<?=$options['maxlenght']?>" cols="<?=$options['cols']?>" rows="<?=$options['rows']?>" <?=$options['required']?>><?=$valeur?></textarea>
                    <?php
                    break;

                case 'file':
                    ?>
                    <h4><label for="<?=$options['id']?>"><?=$options['label']?></label></h4>
                    <input type="<?=$options['type']?>" name="<?=$name?>" id="<?=$options['id']?>" accept="<?=$options['accept']?>" <?=$options['required']?>>
                    <?php
                    break;

                case 'date':
                    ?>
                    <div class="input-group">
                        <input type="<?=$options['type']?>" name="<?=$name?>" id="<?=$options['id']?>" value="<?=$valeur?>" min='<?=$options['min']?>' max="<?=$options['max']?>" <?=$options['required']?>>   
                        <span class="barre"></span>
                        <label for="<?=$options['id']?>"><?=$options['label']?></label>
                    </div>  
                    <?php
                    break;
                
                default:
                    ?>
                    <div class="input-group">
                        <input type="<?=$options['type']?>" name="<?=$name?>" id="<?=$options['id']?>" value="<?=$valeur?>" placeholder="<?=$options['placeholder']?>" <?php if(isset($options['pattern'])): ?> pattern="<?=$options['pattern']?>" <?php endif ?> <?=$options['required']?>>   
                        <span class="barre"></span>
                        <label for="<?=$options['id']?>"><?=$options['label']?></label>
                    </div>  
                    <?php
                    break;
            }
        }

        public function end() {
            ?>
                </div>
                <div>
                    <button type="submit" class="submit">Soumettre</button>
                </div>  
                </form> 
            <?php
        }
    }