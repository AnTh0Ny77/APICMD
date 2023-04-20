<?php
namespace Src\Entities;
require  '././vendor/autoload.php';

class Cmd {

    protected $cmd__id;
    protected $cmd__date_devis;
    protected $cmd__date_cmd;
    protected $cmd__date_fact;
    protected $cmd__date_envoi;
    protected $cmd__user__id_devis;
    protected $cmd__user__id_cmd;
    protected $cmd__user__id_fact;
    protected $cmd__client__id_fact;
    protected $cmd__contact__id_fact;
    protected $cmd__client__id_livr;
    protected $cmd__contact__id_livr;
    protected $cmd__code_cmd_client;
    protected $cmd__id_facture;
    protected $cmd__note_client;
    protected $cmd__note_interne;
    protected $cmd__etat;
    protected $cmd__modele_devis;
    protected $cmd__modele_facture;
    protected $cmd__reglement;
    protected $cmd__tva;
    protected $cmd__nom_devis;
    protected $cmd__trans;
    protected $cmd__trans_kg;
    protected $cmd__trans_info;
    
    public function getCmd__id() {
        return $this->cmd__id;
    }
    
    public function setCmd__id($cmd__id) {
        $this->cmd__id = $cmd__id;
    }
    
    public function getCmd__date_devis() {
        return $this->cmd__date_devis;
    }
    
    public function setCmd__date_devis($cmd__date_devis) {
        $this->cmd__date_devis = $cmd__date_devis;
    }
    
    public function getCmd__date_cmd() {
        return $this->cmd__date_cmd;
    }
    
    public function setCmd__date_cmd($cmd__date_cmd) {
        $this->cmd__date_cmd = $cmd__date_cmd;
    }
    
    public function getCmd__date_fact() {
        return $this->cmd__date_fact;
    }
    
    public function setCmd__date_fact($cmd__date_fact) {
        $this->cmd__date_fact = $cmd__date_fact;
    }
    
    public function getCmd__date_envoi() {
        return $this->cmd__date_envoi;
    }
    
    public function setCmd__date_envoi($cmd__date_envoi) {
        $this->cmd__date_envoi = $cmd__date_envoi;
    }
    
    public function getCmd__user__id_devis() {
        return $this->cmd__user__id_devis;
    }
    
    public function setCmd__user__id_devis($cmd__user__id_devis) {
        $this->cmd__user__id_devis = $cmd__user__id_devis;
    }
    
    public function getCmd__user__id_cmd() {
        return $this->cmd__user__id_cmd;
    }
    
    public function setCmd__user__id_cmd($cmd__user__id_cmd) {
        $this->cmd__user__id_cmd = $cmd__user__id_cmd;
    }
    
    public function getCmd__user__id_fact() {
        return $this->cmd__user__id_fact;
    }
    
    public function setCmd__user__id_fact($cmd__user__id_fact) {
        $this->cmd__user__id_fact = $cmd__user__id_fact;
    }
    
    public function getCmd__client__id_fact() {
        return $this->cmd__client__id_fact;
    }

    public function getCmd__contact__id_fact() {
        return $this->cmd__contact__id_fact;
    }
    
    public function setCmd__contact__id_fact($cmd__contact__id_fact) {
        $this->cmd__contact__id_fact = $cmd__contact__id_fact;
    }
    
    public function getCmd__client__id_livr() {
        return $this->cmd__client__id_livr;
    }
    
    public function setCmd__client__id_livr($cmd__client__id_livr) {
        $this->cmd__client__id_livr = $cmd__client__id_livr;
    }
    
    public function getCmd__contact__id_livr() {
        return $this->cmd__contact__id_livr;
    }
    
    public function setCmd__contact__id_livr($cmd__contact__id_livr) {
        $this->cmd__contact__id_livr = $cmd__contact__id_livr;
    }
    
    public function getCmd__code_cmd_client() {
        return $this->cmd__code_cmd_client;
    }
    
    public function setCmd__code_cmd_client($cmd__code_cmd_client) {
        $this->cmd__code_cmd_client = $cmd__code_cmd_client;
    }
    
    public function getCmd__id_facture() {
        return $this->cmd__id_facture;
    }
    
    public function setCmd__id_facture($cmd__id_facture) {
        $this->cmd__id_facture = $cmd__id_facture;
    }
    
    public function getCmd__note_client() {
        return $this->cmd__note_client;
    }
    
    public function setCmd__note_client($cmd__note_client) {
        $this->cmd__note_client = $cmd__note_client;
    }
    
    public function getCmd__note_interne() {
        return $this->cmd__note_interne;
    }
    
    public function setCmd__note_interne($cmd__note_interne) {
        $this->cmd__note_interne = $cmd__note_interne;
    }
    
    public function getCmd__etat() {
        return $this->cmd__etat;
    }
    
    public function setCmd__etat($cmd__etat) {
        $this->cmd__etat = $cmd__etat;
    }

    public function getCmdModeleDevis() {
        return $this->cmd__modele_devis;
    }
    
    public function setCmdModeleDevis($modeleDevis) {
        $this->cmd__modele_devis = $modeleDevis;
    }
    
    public function getCmdModeleFacture() {
        return $this->cmd__modele_facture;
    }
    
    public function setCmdModeleFacture($modeleFacture) {
        $this->cmd__modele_facture = $modeleFacture;
    }
    
    public function getCmdReglement() {
        return $this->cmd__reglement;
    }
    
    public function setCmdReglement($reglement) {
        $this->cmd__reglement = $reglement;
    }
    
    public function getCmdTva() {
        return $this->cmd__tva;
    }
    
    public function setCmdTva($tva) {
        $this->cmd__tva = $tva;
    }
    
    public function getCmdNomDevis() {
        return $this->cmd__nom_devis;
    }
    
    public function setCmdNomDevis($nomDevis) {
        $this->cmd__nom_devis = $nomDevis;
    }
    
    public function getCmdTrans() {
        return $this->cmd__trans;
    }
    
    public function setCmdTrans($trans) {
        $this->cmd__trans = $trans;
    }
    
    public function getCmdTransKg() {
        return $this->cmd__trans_kg;
    }
    
    public function setCmdTransKg($transKg) {
        $this->cmd__trans_kg = $transKg;
    }
    
    public function getCmdTransInfo() {
        return $this->cmd__trans_info;
    }
    
    public function setCmdTransInfo($transInfo) {
        $this->cmd__trans_info = $transInfo;
    }

}
