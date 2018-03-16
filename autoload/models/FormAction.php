<?php
namespace models;

class FormAction {
    public static function validate($f3, $data)
    {
        if (mb_strlen($data['fio'])<= 0){return array ('status' => False, 'textError' => "Поле ФИО пустое");}
        elseif (mb_strlen($data['fakultet'])<= 0){return array ('status' => False, 'textError' => "Поле факультет пустое");}
        elseif (mb_strlen($data['kurs'])<= 0){return array ('status' => False, 'textError' => "Поле курс пустое");}
        elseif (mb_strlen($data['group'])<= 0){return array ('status' => False, 'textError' => "Поле группа пустое");}
        elseif (mb_strlen($data['phone'])<= 0){return array ('status' => False, 'textError' => "Поле телефон пустое");}
        elseif (mb_strlen($data['vkLink'])<= 0){return array ('status' => False, 'textError' => "Поле ссылка VK пустое");}
        elseif (mb_strlen($data['experience'])<= 0){return array ('status' => False, 'textError' => "Поле опыт походов пустое");}
        elseif (mb_strlen($data['otherExperience]'])<= 0){return array ('status' => False, 'textError' => "Поле друг пустое");}
        elseif (mb_strlen($data['inventoryAvailiable'])<= 0){return array ('status' => False, 'textError' => "Поле инвентарь пустое");}
        elseif (mb_strlen($data['fitnessLevel'])<= 0){return array ('status' => False, 'textError' => "Поле уровень физ. подготовки пустое");}
        elseif (mb_strlen($data['diseases'])<= 0){return array ('status' => False, 'textError' => "Поле болезни пустое");}
        elseif (mb_strlen($data['allergies'])<= 0){return array ('status' => False, 'textError' => "Поле аллергии пустое");}
        elseif (mb_strlen($data['yourTrip'])<= 0){return array ('status' => False, 'textError' => "Поле путешествие пустое");}
        elseif (mb_strlen($data['fio'])>1024){return array ('status' => False, 'textError' => "Поле ФИО переполнено");}
        elseif (mb_strlen($data['fakultet'])>1024){return array ('status' => False, 'textError' => "Поле факультет переполнено");}
        elseif (mb_strlen($data['kurs'])>1024){return array ('status' => False, 'textError' => "Поле курс переполнено");}
        elseif (mb_strlen($data['group'])>1024){return array ('status' => False, 'textError' => "Поле группа переполнено");}
        elseif (mb_strlen($data['phone'])>1024){return array ('status' => False, 'textError' => "Поле телефон переполнено");}
        elseif (mb_strlen($data['vkLink'])>1024){return array ('status' => False, 'textError' => "Поле ссылка VK переполнено");}
        elseif (mb_strlen($data['experience'])>1024){return array ('status' => False, 'textError' => "Поле опыт походов переполнено");}
        elseif (mb_strlen($data['otherExperience]'])>1024){return array ('status' => False, 'textError' => "Поле друг переполнено");}
        elseif (mb_strlen($data['inventoryAvailiable'])>1024){return array ('status' => False, 'textError' => "Поле инвентарь переполнено");}
        elseif (mb_strlen($data['fitnessLevel'])>1024){return array ('status' => False, 'textError' => "Поле уровень физ. подготовки переполнено");}
        elseif (mb_strlen($data['diseases'])>1024){return array ('status' => False, 'textError' => "Поле болезни переполнено");}
        elseif (mb_strlen($data['allergies'])>1024){return array ('status' => False, 'textError' => "Поле аллергии переполнено");}
        elseif (mb_strlen($data['yourTrip'])>1024){return array ('status' => False, 'textError' => "Поле путешествие переполнено");}
        return array ('status' => TRUE, 'textError' => '');
    }
    public static function record($f3, $data) {
        $f3->get('DB')->exec('INSERT INTO `records`(`id`, `fio`, `fakultet`, `kurs`, `groupa`, `phone`, `vkLink`, `experience`, 
        `otherExperience`, `inventoryAvailiable`, `fitnessLevel`, `diseases`, `allergies`, `yourTrip` ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array(
            1=> NULL,
            2=> $data['fio'],
            3=> $data['fakultet'],
            4=> $data['kurs'],
            5=> $data['group'],
            6=> $data['phone'],
            7=> $data['vkLink'],
            8=> $data['experience'],
            9=> $data['otherExperience'],
            10=> $data['inventoryAvailiable'],
            11=> $data['fitnessLevel'],
            12=> $data['diseases'],
            13=> $data['allergies'],
            14=> $data['yourTrip'],
        ));
    }
}
