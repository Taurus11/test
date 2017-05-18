<?php



class Controller_Pets extends Controller
{

    public function __construct()
    {
        $this->pet = new \Models\Pets();
        $this->view = new View();
    }

    public function action_delete($id)
    {
        $pet = \Models\Pets::find($id);
        $pet->delete();
        echo 'вы удалили запись с id - ' . $id . '<br>';
        echo '<a href="/">жмак</a>';
    }

    public function action_create()
    {
        $this->view->generate('create_view.php', 'template_view.php');
    }

    public function action_save ()
    {
        $pet = new \Models\Pets();
        $pet->name = $_POST['name_pet'];
        $pet->type = $_POST['type_pet'];
        $pet->save();
        echo 'вы добавили массив<br>';
        echo '<a href="/">жмак</a>';

    }

    public function action_update($id)
    {
        $this->view->generate('update_view.php', 'template_view.php', ['id' => $id]);
        return $id;
    }

    public function action_change ($id)
    {
        $pet = \Models\Pets::find($id);
        $pet->name = $_POST['name_pet'];
        $pet->type = $_POST['type_pet'];
        $pet->save();
        echo '<a href="/">жмак</a>';
    }
}