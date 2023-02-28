<div class="container mt-3">
  <div class="row">
    <div class="col col-lg-2">
        <div>Chose pagination:</div>
        <select wire:model="paginationCount" class="form-select" aria-label="Default select example">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>
    <div class="col col-lg-2">
        <div>Sort by name:</div>
        <select wire:model="sortUsersByName" class="form-select" aria-label="Default select example">
            <option value="desc">DESC</option>
            <option value="asc">ASC</option>
        </select>
    </div>
    <div class="col col-lg-2">
        <div>Chose fields:</div>
        <select wire:model="shownTableTitles" multiple>
            <option value="id">Id</option>
            <option value="name">Name</option>
            <option value="email">Email</option>
            <option value="email_verified_at">Email Verified</option>
            <option value="password">Password</option>
            <option value="remember_token">Remember Token</option>
            <option value="created_at">Created</option>
            <option value="updated_at">Updated</option>
        </select>
    </div>
    <div class="col col-lg-2">
        <div>Search by name:</div>
        <input wire:model="search" type='text'>
    </div>
  </div>
<div>
<div class="container mt-3">
  <div class="row">    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
        @if($users[0])
          @if($users[0]->id) <th>Id</th>@endif
          @if($users[0]->name) <th>Name</th>@endif
          @if($users[0]->email) <th>Email</th>@endif
          @if($users[0]->email_verified_at) <th>Email Verified</th>@endif
          @if($users[0]->created_at) <th>Created date</th>@endif
          @if($users[0]->updated_at) <th>Updated date</th>@endif
        @endif
        </tr>
      </thead>
      <tfoot>
        <tr>
        @if($users[0])
          @if($users[0]->id) <th>Id</th>@endif
          @if($users[0]->name) <th>Name</th>@endif
          @if($users[0]->email) <th>Email</th>@endif
          @if($users[0]->email_verified_at) <th>Email Verified</th>@endif
          @if($users[0]->created_at) <th>Created date</th>@endif
          @if($users[0]->updated_at) <th>Updated date</th>@endif
        @endif
        </tr>
      </tfoot>
      <tbody>
        @foreach ($users as $user)
        <tr>
          @if($user->id) <td> {{ $user->id }} </td> @endif
          @if($user->name) <td>{{ $user->name }}</td> @endif
          @if($user->email) <td>{{ $user->email }}</td> @endif
          @if($user->email_verified_at) <td>{{ $user->email_verified_at }}</td> @endif
          @if($user->created_at) <td>{{ $user->created_at }}</td> @endif
          @if($user->updated_at) <td>{{ $user->updated_at }}</td> @endif
        </tr>
        @endforeach   
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="row justify-content-md-center">
        {{ $users->links() }}
    </div>
  </div>
</div>
