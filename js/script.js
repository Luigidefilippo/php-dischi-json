const { createApp} = Vue;

createApp({
    data(){
        return{
            disks:[]
        };
    },
    mounted(){
        this.getDisks();
    },
    methods: {
        getDisks(){
            axios
            .get("http://localhost/Boolean-Esercizi/php-dischi-json/
            ")
            .then((resp)=>{
                this.disks=resp.data.resuls;
            });
        },
    },
}).mount("#app");