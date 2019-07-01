<?php

use Illuminate\Database\Seeder;
use App\Product;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();

        $products = [
            [ 'id' => 1, 'name' => 'Mentes tóxicas', 'url_img' => 'imagen-mentes-toxicas.jpg', 'description' => 'Mucho se habla sobre las mentes tóxicas, pero cuando convives con ellas no es tan fácil detectarlas, ni mucho menos alejarte cuando ya tienes un lazo emocional con ellas, por ello en este curso intensivo te daremos la clave para detectar cuando estás conviviendo con una mente tóxica o cuando tú puedas ser una, te enseñaremos porqué se gestan y cómo corregirlas, y cuáles son las medidas que debes tomar para convivir con ellas sin que te afecten o en su caso cómo lograr alejarte.'],
            [ 'id' => 2, 'name' => 'La insatisfacción del pasado', 'url_img' => 'imagen-la-insatisfaccion-del-pasado.jpg', 'description' => 'La historia de nuestro pasado se forma con las experiencias que tuvimos con nuestra familia, amigos, parejas, aceptación o rechazo social vividos, etc., y al observar nuestra vida actual y compararla con la vida que tienen otros muchas veces llegamos a considerar que la nuestra no es tan “buena”, comenzamos a pensar “si yo hubiera nacido en..., si yo no hubiera tenido que vivir con..., si a mí me hubieran dado esta oportunidad, etc.”, y se detona una insatisfacción con el pasado que no nos permitirá explotar al 100% nuestras capacidades y obtener un nivel y calidad de vida óptimos. Es necesario aprender a soltar esa insatisfacción de lo contrario experiencias que ya no existen en el presente te estancarán, en este curso te enseñaremos a reflexionar acerca de ese pasado, trascenderlo sin importar cuál haya sido y encaminarte a un nuevo tipo de vida.' ],
            [ 'id' => 3, 'name' => 'Química cerebral', 'url_img' => 'imagen_quimica_cerebral.jpg', 'description' => 'Siempre nos han dicho que las emociones son naturaleza del hombre, que es imposible dejarlas de sentir, pero si profundizamos en su funcionamiento nos daremos cuenta que no son más que sustancias químicas que se segregan en nuestro cerebro y que dependen de un sinfín de conexiones neuronales formadas por educación. Comprender cómo se generan nuestras emociones nos permite darnos cuenta que no hay ninguna emoción placentera o displacentera que no podamos trascender, este curso te llevará por un asombroso viaje a través de la incomparable máquina cerebral y te dará una profunda claridad de su funcionamiento. ¡No te lo puedes perder!' ],
            [ 'id' => 4, 'name' => 'Trastornos de vinculación: Huella de abandono', 'url_img' => 'imagen-trastorno-de-vinculacion.jpg', 'description' => 'Todos alguna vez hemos usado la palabra inconsciente pero si tuviéramos que dar uno de los más potentes y mejores ejemplos de este concepto definitivamente es el trastorno de vinculación o más conocido como huella de abandono. Uno de los problemas psicológicos más nocivos para un ser humano que se gesta en la completa inconsciencia de quien lo provoca y de quien lo padece, es necesario estudiar y comprender qué es, cómo se produce y sobre todo cómo se corrige para poder solucionar en nosotros mismos y en terceros este problema psicológico que hoy se le conoce como la huella de las huellas.' ],
        ];

        Product::insert($products);
    }
}
