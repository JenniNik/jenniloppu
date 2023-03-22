<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaHenkilo($nimi,$email,$salasana) {
    DB::run('INSERT INTO henkilotaulu (nimi, email, salasana) VALUE  (?,?,?);',[$nimi,$email,$salasana]);
    return DB::lastInsertId();
  }
  function haeHenkiloSahkopostilla($email) {
    return DB::run('SELECT * FROM henkilotaulu WHERE email = ?;', [$email])->fetchAll();
  }
  function haeHenkilo($email) {
    return DB::run('SELECT * FROM henkilotaulu WHERE email = ?;', [$email])->fetch();
  }
  function paivitaVahvavain($email,$avain) {
    return DB::run('UPDATE henkilotaulu SET vahvavain = ? WHERE email = ?', [$avain,$email])->rowCount();
  }

  function vahvistaTili($avain) {
    return DB::run('UPDATE henkilotaulu SET vahvistettu = TRUE WHERE vahvavain = ?', [$avain])->rowCount();
  }

?>
