import { ReposPays } from "./ReposPays.js";

const app = {
    data() {
        return {
            listPays: [],
            listVille: [],
            ville: [],
            monPays: null
        }
    }, async mounted() {
        this.listPays = await ReposPays.getCoyntrys();
        
        this.listVille = await ReposPays.getVille();
        this.ville = await ReposPays.getVille(1);
        console.log(this.ville);
    }, methods: {
        openDetails(event) {
            let idPays = event.target.dataset.id;
            
            this.monPays = this.listPays.find(a => a.id == idPays);
            
            this.$refs.modal.style.display = 'block';
            
        }, closeDetails(){
            this.$refs.modal.style.display = 'none';

        }
        
        
    }
}

Vue.createApp(app).mount('#app');