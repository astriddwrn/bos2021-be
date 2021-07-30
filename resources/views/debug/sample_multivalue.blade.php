<form action="{{ route("debug.view", "sample_multivalue") }}" method="post" enctype="application/x-www-form-urlencoded">

    @csrf

    <div>
        <input type="checkbox" name="input1[]" value="Alpha">
        Alpha
    </div>
    <div>
        <input type="checkbox" name="input1[]" value="Beta">
        Beta
    </div>
    <div>
        <input type="checkbox" name="input1[]" value="Gamma">
        Gamma
    </div>
    <div>
        <input type="checkbox" name="input1[]" value="Delta">
        Delta
    </div>
    <div>
        <input type="checkbox" name="input1[]" value="Octa">
        Octa
    </div>

    <input type="submit">

</form>
