const submit = document.getElementById('submit');
submit.addEventListener('click', (event)=>{
    const campoCargo = document.getElementById('campo-cargo');
    let prevent = false;

    if(campoCargo.value == "Admin")
    {
        if(!prevent){
            Swal.fire({
                title: "Tem certeza de que quer colocar um cargo de Admin neste contratado?",
                text: "Este cargo permite gerenciar outros contratados do sistema!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sim, tenho certeza!"
                
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                    });
                }
                });
            prev
        }
    }
})