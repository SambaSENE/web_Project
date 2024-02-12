
/**
 * Machine à  voter
 */

import { FetchApi } from "./FetchApi.js";
import { Candidat } from "./Candidat.js";

const APIUrl = 'http://localhost:3000/api/candidatss';


const app = {
    data() {
        return {
            candidats: [],
            arrayCandidat: []

        }
    },
    async mounted() {
        const data = await FetchApi.fetchApi(APIUrl);
        for (const c of data) {
            const candidat = new Candidat(c);
            this.candidats.push(candidat);
        }
        this.arrayCandidat = [...this.candidats];

console.log(this.candidats);
    },
    computed: {
        getNbCandidats() {
            return this.candidats.length;
        }
    },
    methods: {
        afficherCandidats() {
            //  document.location('./liste-votant.html');
        }
    }
}

Vue.createApp(app).mount('#app');