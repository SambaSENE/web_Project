
/**
 * Machine à  voter
 */

import { FetchApi } from "./FetchApi.js";
import { Candidat } from "./Candidat.js";

const APIUrl = 'http://localhost:3000/api/candidatss';


const app = {
    data() {
        return {
            candidats : [],
            picture : []
           
        }
    },
    async mounted() {
        const data = await FetchApi.FetchApi(APIUrl);
        for (const item of data) {
            const candidat = new Candidat(item);
            this.candidats.push(candidat);
        }
        console.log(this.candidats);
        // const arrayCandidat = [...this.candidats];
        

     console.log(this.picture);
    },
    computed: {
        getNbCandidats()
        {
            return this.candidats.length;
        }
    },
    methods: {
        getPic()
        {
            
        }
    }
}

Vue.createApp(app).mount('#app');