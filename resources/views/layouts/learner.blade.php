<form class="form-inline">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Найти...">
    </div>
    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Поиск</button>
</form>
@foreach($tutors as $tutor)
<hr>
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object" src="img/140.gif" alt="...">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">{{ $tutor->name }}</h4>
            {{ $tutor->description }}
        </div>
    </div>
<hr>
@endforeach