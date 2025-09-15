<?php
abstract class Notificacao {
    abstract public function enviar();
}

class Email extends Notificacao {
    public function enviar() {
        return "Enviando notificação por Email.";
    }
}

class SMS extends Notificacao {
    public function enviar() {
        return "Enviando notificação por SMS.";
    }
}

class Push extends Notificacao {
    public function enviar() {
        return "Enviando notificação por Push.";
    }
}

$notifs = [new Email(), new SMS(), new Push()];
foreach ($notifs as $n) {
    echo $n->enviar() . PHP_EOL;
}
?>