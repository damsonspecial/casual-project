<div style="text-align: center">
<button wire:click="increment">+</button>
<h1>{{$count}}</h1>
<button  wire:click="decrement">-</button>


<h1> NEW</h1>

<div style="text-align: left ">

    <Form wire:submit="add">
<input type="text" wire:model="todo">
<button type="submit">Add</button>
    </Form>



<ul>
    @foreach ($todos as $todo )
        <li>{{$todo}}</li>
    @endforeach
</ul>
</div>
</div>
