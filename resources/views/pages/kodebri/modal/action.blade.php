<a href="javascript:void(0)" onclick="show_data({{ $data->id }})" class="btn btn-sm btn-info text-white show_modal" data-toggle="modal" data-target="#kodebri_show" data-placement="top" title="Show"><i class="fa fa-eye"></i></a>
<a href="javascript:void(0)" onclick="edit_data({{ $data->id }})" data-id="{{ $data->id }}" class="btn btn-sm btn-warning text-white swal-edit-button" data-toggle="modal" data-target="#kodebri_edit" data-placement="top" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
<a href="javascript:void(0)" onclick="delete_data({{ $data->id }})" class="btn btn-sm btn-danger text-white swal-delete-button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-fw fa-trash-alt"></i></a>