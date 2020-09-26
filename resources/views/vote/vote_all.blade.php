<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
<style>
    #y {
        border-radius: 25px;
        background: #4BB543;
        padding-top: 3px;
        padding-left:3px;
        margin-left: 10%;
        color: white;
        width: 20px;
        font-size: 14;
        height: 20px;
    }
    #n {
        border-radius: 25px;
        background: #DE4019;
        padding-top: 3px;
        padding-left:3px;
        margin-left: 10%;
        color: white;
        width: 20px;
        font-size: 14;
        height: 20px;
    }
</style>
@extends('master')

@section ('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Data Hak Suara</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" border="0" class="display" style="width:100%;" id="anggota">
                    <thead>
                        <th>ID</th>
                          <th>NIM</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Vote</th>
                          <th>Aksi</th>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($user as $u)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>1818001</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                @if ($u->status == 0)
                                    Admin
                                @elseif ($u->status == 1)
                                    Mahasiswa
                                @elseif ($u->status == 2)
                                    Alumni
                                @endif
                            </td>
                            <td>
                                @if (($u->vote != null || ($u->vote != 0)))
                                    <i class="material-icons" id="y">done</i>
                                @else
                                    <i class="material-icons" id="n">clear</i>
                                @endif
                            </td>
                            <td>
                                @if ($u->id != null)
                                    <a href="{{ url('delete_vote/') }}/{{ $u->id }}">
                                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus  {{ $u->email }} ?');">Delete</button>
                                    </a>
                                    @else

                                @endif
                            </td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
  $('#anggota').DataTable({
      responsive: true
  } );
</script>
@stop
