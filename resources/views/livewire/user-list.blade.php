<div>
    <h1>{{$title}}</h1>
    <div class="row">
      <div class="col-md-4">
        <input name="search" id="search" wire:model.live="search" type="text" class="form-control" placeholder="cari nama atau email">
      </div>
    </div>
    <table class="table table-stripe">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Create AT</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)    
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <div class="row">
        <div class="col-md-1">
          <select wire:model.live='perPage' class="form-select">
            <option value="10">10</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select>
        </div>
        <div class="col-md-11">
          {{ $users->links('pagination::bootstrap-5') }}
        </div>
      </div>
</div>