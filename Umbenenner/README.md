# Umbenenner
Ermöglicht das umbenennen von Objekten aus dem WebFront heraus.


### Inhaltsverzeichnis

1. [Funktionsumfang](#1-funktionsumfang)
2. [Voraussetzungen](#2-voraussetzungen)
3. [Software-Installation](#3-software-installation)
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [Statusvariablen und Profile](#5-statusvariablen-und-profile)
6. [WebFront](#6-webfront)
7. [PHP-Befehlsreferenz](#7-php-befehlsreferenz)

### 1. Funktionsumfang

* Erlaubt es mehrere Objekte aus dem WebFront heraus umzubenennen.
* Namensänderungen der Objekte, die nicht durch das Modul gemacht werden, werden nicht an die Statusvariaben weiter gegeben.

### 2. Voraussetzungen

- IP-Symcon ab Version 4.4

### 3. Software-Installation

* Über den Module Store das Modul SymconConfiguration installieren.
* Alternativ über das Module Control folgende URL hinzufügen:
`https://github.com/symcon/SymconConfiguration`

### 4. Einrichten der Instanzen in IP-Symcon

- Unter "Instanz hinzufügen" kann das 'Umbenenner'-Modul mithilfe des Schnellfilters gefunden werden.
    - Weitere Informationen zum Hinzufügen von Instanzen in der [Dokumentation der Instanzen](https://www.symcon.de/service/dokumentation/konzepte/instanzen/#Instanz_hinzufügen)

__Konfigurationsseite__:

Name    | Beschreibung
------- | ---------------------------------
Objekte | Eine Liste, zu der alle Objekte hinzugefügt werden müssen, die im Webfront umbenannt werden können sollen.

### 5. Statusvariablen und Profile

##### Statusvariablen

Für jedes in der Instanzkonfiguration ausgewähltes Objekt wird eine Statusvariable vom Typ String erstellt.
Der Name der Variablen ist der aktuelle Ort des Objektes welches umbenannt wird.

##### Profile:

Es werden keine zusätzlichen Profile hinzugefügt.

### 6. WebFront

Hier können die zuvor ausgewählten Objekte umbenannt werden.

### 7. PHP-Befehlsreferenz

Dieses Modul bietet keinerlei PHP-Befehle.
