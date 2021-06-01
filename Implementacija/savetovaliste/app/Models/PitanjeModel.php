<?php namespace App\Models;

use CodeIgniter\Model;

use App\Models\TipKorisnikaModel;

class PitanjeModel extends Model
{
        protected $table      = 'pitanje';
        protected $primaryKey = 'idPitanje';
        protected $allowedFields = ['korisnik_idKorisnik_postavio',
            'kategorijaPitanja_idKategorija', 'naslovPitanja', 'tesktPitanja','postavljenoANonimno','moguSviDaOdgovore'];
        protected $returnType = 'object';
        
    
        // Prosledimo id pitanja i dobijemo tekst pitanja
        public function findByUsername($username){
            return $this->where('username', $username)->first();
        }
        
        // Vraća string koji označava da li je korisnik običan korisnik, psiholog ili admin, ili pak nešto novo ako dodamo
        // String se dobija iz baze
        public function findUserType($id){
            $korisnik = $this->find($id);
            
            $tipKorisnikaModel = new TipKorisnikaModel();
            $tipKorisnika = $tipKorisnikaModel->find($korisnik->tipKorisnika_idTipKorisnika);
            
            if($tipKorisnika == null){
                return null;
            }
            
            return $tipKorisnika->tip;
        } 
}