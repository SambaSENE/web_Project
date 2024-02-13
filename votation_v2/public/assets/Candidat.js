class Candidats
{
    constructor (_candidat){
        Object.assign(_candidat)
        this.urlPic = "'./assets/candidats/' + _candidat.id + 'jpg'";
    } 
}
export { Candidats }