<?php

use Illuminate\Database\Seeder;
use App\Note;

class CreateUserNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->delete();

        $lorem_ipsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque scelerisque gravida. Vivamus id sem massa. Integer sed ipsum justo. Vivamus laoreet mi non orci cursus, non commodo libero volutpat. Curabitur pretium lacinia tellus, non tempor tortor ultrices ut. Aenean et felis at ipsum bibendum fringilla nec vel lorem. Etiam in malesuada turpis, a dignissim metus. Donec ultricies orci ante, a ultrices metus semper ut. Nullam congue dignissim placerat. Vestibulum turpis arcu, venenatis ac ante nec, dignissim convallis urna. Aliquam consectetur orci maximus, sollicitudin neque sed, aliquam lacus. Duis quis metus vel sem blandit aliquam vel vel augue. Praesent justo ipsum, egestas a nulla id, rhoncus vehicula sem. Morbi maximus, odio a imperdiet gravida, sem sapien hendrerit felis, sed cursus turpis orci at erat.\nNulla tincidunt, est sit amet pretium malesuada, ante ante viverra nisi, id egestas enim sapien in magna. Cras lorem libero, egestas eget massa ut, lacinia ullamcorper purus. Aenean lobortis massa ante, eu pretium sem luctus suscipit. Vestibulum nunc turpis, suscipit sed egestas eget, posuere ut ligula. Ut bibendum eleifend nisl non pulvinar. Nulla luctus sit amet dui at rutrum. Proin aliquam nunc dolor, ac malesuada felis pulvinar eget. Sed malesuada egestas nibh vitae vulputate. Nullam viverra leo massa, tempor congue nulla porta ut. Integer ornare in felis in varius. Aliquam interdum tincidunt blandit. Suspendisse ut dolor sagittis, facilisis orci eu, hendrerit risus. Nulla malesuada arcu at tortor aliquam consequat.';

        $notes = [
            [ 'id' => 1, 'user_id' => 1, 'text' => $lorem_ipsum, ],
            [ 'id' => 2, 'user_id' => 1, 'text' => $lorem_ipsum, ],
            [ 'id' => 3, 'user_id' => 1, 'text' => $lorem_ipsum, ],

            [ 'id' => 4, 'user_id' => 2, 'text' => $lorem_ipsum, ],
            [ 'id' => 5, 'user_id' => 2, 'text' => $lorem_ipsum, ],
            [ 'id' => 6, 'user_id' => 2, 'text' => $lorem_ipsum, ],
            [ 'id' => 7, 'user_id' => 2, 'text' => $lorem_ipsum, ],

            [ 'id' => 8, 'user_id' => 3, 'text' => $lorem_ipsum, ],
            [ 'id' => 9, 'user_id' => 3, 'text' => $lorem_ipsum, ],

            [ 'id' => 10, 'user_id' => 4, 'text' => $lorem_ipsum, ],

            [ 'id' => 11, 'user_id' => 5, 'text' => $lorem_ipsum, ],
        ];

        Note::insert($notes);
    }
}
