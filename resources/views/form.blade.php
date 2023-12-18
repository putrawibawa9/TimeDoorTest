@extends ('layout.main')

@section('container')
<h1 class="mt-4">Welcome to my beginner program</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Nationality">Nationality :</label>
            <input type="text" name="nationality" id="Nationality" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="volunteering_history">Please tell us about your volunteering history (ignore this if you have none) :</label>
            <input type="text" name="volunteering_history" id="volunteering_history" class="form-control">
        </div>
        <div class="form-group">
            <label for="volunteering_start">When will you be ready to volunteer? (please tell us the date and month)</label>
            <input type="text" name="volunteering_start" id="volunteering_start" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="volunteering_period">For how long will you do the volunteering? (please tell us the date and month)</label>
            <input type="text" name="volunteering_period" id="volunteering_period" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Post</button>
    </form>

    <a href="preview.php" class="mt-3 d-block">Preview your submitted answers</a>

    @endsection