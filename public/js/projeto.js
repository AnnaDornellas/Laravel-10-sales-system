function deleteRegistroPaginacao(rotaUrl, idDoRegistro){


    if (confirm('Deseja excluir esse produto?')){
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{
                id:idDoRegistro,
            },
            beforeSend: function (){
                $.blockUI({
                    message: 'Carregando...',
                    timeout:2000,
                });
            },
        }).done(function(data){
            $.unblockUI();
            if(data.success == true){
                window.location.reload();

            }else{
                alert('Não foi possivel deletar');
            }
        }).fail(function(data){
            $.unblockUI();
            alert('Não foi possivel buscar os dados');
        });
    }
}