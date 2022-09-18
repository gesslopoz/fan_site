<?php

namespace App\Http\Livewire\Fans;

use Livewire\Component;
use App\Models\Fan;
class Delete extends Component
{

    public $fanId;
    public function getFanProperty() {
        return Fan::select('id', 'name', 'age', 'address', 'idol_name', 'group_name')
            ->find($this->fanId);
    }

    public function delete() {
        $this->fan->delete();

        return redirect('/fan')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/fan');
    }
    public function render()
    {
        return view('livewire.fans.delete');
    }
}
