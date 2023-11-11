static function getRoles($id) {
        view('subview/roles', [
            'roles' => Roles::selectStudentByRole($id),
            'header' => titleheader('Read data scr AJAX dgn jQuery', 'h1', 'text-center mb-3')
        ]);
    } # Ditugaskan