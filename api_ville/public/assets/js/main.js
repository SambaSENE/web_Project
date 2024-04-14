import { ReposPays } from "./ReposPays.js";
import { ReposVille } from "./ReposVille.js";

const app = {
    data() {
        return {
            listPays: [],
            listVilles: [],
            ville: [],
            monPays: null
        }
    }, async mounted() {
        this.listPays = await ReposPays.getCoyntrys();
        this.listVilles = await ReposVille.getVilles();
        
      
        
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