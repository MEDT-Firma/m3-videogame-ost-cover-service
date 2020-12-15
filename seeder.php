<?php
include "ost.php";

class Seeder
{
    function getDemoData()
    {
        return [new OST(1, 'Doom (Original Game Soundtrack)', 'Doom', 2016,
            [
                new Track(1, 'I. Dogma', 'Mick Gordon', 1, 0.44),
                new Track(2, 'Rip & Tear', 'Mick Gordon', 2, 4.17),
                new Track(3, 'At Doom\'s Gate', 'Mick Gordon', 3, 1.10),
                new Track(4, 'Rust, Dust & Guts', 'Mick Gordon', 4, 7.41)
            ]),
            new OST(2, 'Minecraft - Volume Alpha', 'Minecraft', 2011,
                [
                    new Track(5, 'Key', 'C418', 1, 1.05),
                    new Track(6, 'Door', 'C418', 2, 1.51),
                    new Track(7, 'Subwoofer Lullaby', 'C418', 3, 3.28),
                    new Track(8, 'Death', 'C418', 4, 0.41)
                ]),
            new OST(3, 'ALBUM Halo: Combat Evolved (Original Soundtrack)', 'Halo', 2002,
                [
                    new Track(9,  'Opening Suite', 'Martin O\'Donnel, Michael Salvatori', 1, 3.33),
                    new Track(10, 'Truth and Reconciliation Suite', 'Martin O\'Donnel, Michael Salvatori', 2, 8.25),
                    new Track(11, 'Brothers in Arms', 'Martin O\'Donnel, Michael Salvatori', 3, 1.29),
                    new Track(12, 'Enough Dead Horses', 'Martin O\'Donnel, Michael Salvatori', 4, 3.00),
                ])];
    }

}