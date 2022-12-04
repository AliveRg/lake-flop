<?php

namespace App\Http\Controllers;

use App\Models\InfoUser;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function InfoUser() {
        $users = InfoUser::all();
        return view('user', ['users' => $users]);


    }

    public function Index() {
/* возврат первой записи в таблице по частям (столбцам)
        $InfoUser = InfoUser::find(12);
        dump($InfoUser->id);
        dump($InfoUser->name);
        dump($InfoUser->password);
        dump($InfoUser->email);
        dump($InfoUser->created_at);
        dump($InfoUser->updated_at);
*/

/* возврат всех записей и объектов таблицы
        $InfoUser = InfoUser::all();
        dump($InfoUser);

        return (view('welcome'));
*/
/* возврат определенного столбца(всех его значений) через цикл
        $InfoUser = InfoUser::all();
        foreach ($InfoUser as $InfoUser){
            dump($InfoUser -> name);

        }
*/
    }

    public function Reform()
    {


       $reform = InfoUser::find(13);
       $reform -> update([
           'name' => 'Алексей',
           'password' => '918273',
           'email' => 'Кирилл332@mail.com',
       ]);
        dd($reform);

    }

    public function Create() {

        $postsArrays = [
            [
                'name' => 'Олег',
                'password' => '0980970576',
                'email' => 'Олег345@mail.com',
            ],
            [
                'name' => 'Яна',
                'password' => '34554754',
            'email' => 'Яна436@mail.com',
            ],
            [
                'name' => 'Сережа',
                'password' => '457894232',
                'email' => 'Сережа674@mail.com',
            ],
        ];

        foreach ($postsArrays as $postsArrays)
        {
            InfoUser::create($postsArrays);
        }
        dd('Create');

    }


    public function Delete()
    {
   /* нашли и удалили запись в БД
        $delete = InfoUser::find(5);
        dump($delete);
        $delete -> delete();
        dd('delete');
   */

    /* нашли и восстановили запись (только после добавления в модель InfoUser метода SoftDelete (мягкое удаление)
        $restore = InfoUser::withTrashed() -> find(5);
        dump($restore -> name);
        $restore -> restore();
        dd('restore');
     */

   }

   public function FirstOrCreate()
   {

       $anotherUser = [
           'name' => 'баклажаны с рыбой',
           'password' => '5555555555',
           'email' => 'Рыбка674@mail.com',
       ];

       $firstUser = InfoUser::firstOrCreate([

           'name' => 'баклажаны с рыбой',
       ],
       [
           'name' => 'баклажаны с рыбой',
           'password' => '5555555555',
           'email' => 'Рыбка674@mail.com',
       ]);

        dd($firstUser);
   }

   public function UpdateOrCreate(){

        $UpOrCrt = InfoUser::UpdateOrCreate(
            [
                'name' => 'бешеный меч',

            ],
            [
                'name' => 'бешеный меч',
                'password' => '36456567556',
                'email' => 'Бантиход45666@mail.com',
            ]);
        dd($UpOrCrt);
   }
}
