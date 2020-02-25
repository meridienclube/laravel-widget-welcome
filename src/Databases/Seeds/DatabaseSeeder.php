<?php
namespace ConfrariaWeb\WidgetWelcome\Databases\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('widgets')->insert([
            'name' => 'Widget Welcome',
            'view' => 'widgetWelcome',
            'service' => 'WidgetWelcome',
            'description' => 'This package basically shows random messages on the widget on your dashboard.'
        ]);

        DB::table('widgets_welcome_messages')->insertOrIgnore([
            ['message' => 'Lute. Acredite. Conquiste. Perca. Deseje. Espere. Alcance. Invada. Caia. Seja tudo o quiser ser, mas acima de tudo, seja você sempre.'],
            ['message' => 'Toda ação humana, quer se torne positiva ou negativa, precisa depender de motivação.'],
            ['message' => 'A verdadeira motivação vem de realização, desenvolvimento pessoal, satisfação no trabalho e reconhecimento.'],
            ['message' => 'Tudo o que um sonho precisa para ser realizado é alguém que acredite que ele possa ser realizado.'],
            ['message' => 'Eu faço da dificuldade a minha motivação. A volta por cima vem na continuação.'],
            ['message' => 'Acredite em si próprio e chegará um dia em que os outros não terão outra escolha senão acreditar com você.'],
            ['message' => 'Se a sua vida for a melhor coisa que já te aconteceu, acredite, você tem mais sorte do que pode imaginar.'],
            ['message' => 'Quer você acredite que consiga fazer uma coisa ou não, você está certo.'],
            ['message' => 'Acredite na justiça, mas não a que emana dos demais e sim na tua própria.'],
            ['message' => 'Imagine uma nova história para sua vida e acredite nela.'],
            ['message' => 'Acredite que você pode, assim você já está no meio do caminho.'],
            ['message' => 'Lute pelos sonhos, busque seus objetivos; batalhe pelos seus ideais e mostre que você é um guerreiro.'],
            ['message' => 'A persistência é o caminho do êxito.'],
            ['message' => 'O insucesso é apenas uma oportunidade para recomeçar com mais inteligência.'],
            ['message' => 'No meio da dificuldade encontra-se a oportunidade.'],
            ['message' => 'Quando você quer alguma coisa, todo o universo conspira para que você realize o seu desejo.'],
            ['message' => 'É parte da cura o desejo de ser curado.'],
        ]);

        
    }
}
