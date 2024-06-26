<?php

$allowedIPs = array(
    'https://tv.uvaceylonagro.com',
);

$clientIP = $_SERVER['HTTP_ORIGIN'];

if (!in_array($clientIP, $allowedIPs)) {
    header('HTTP/1.1 403 Forbidden');
    exit('Access Forbidden');
} 

$postData = json_decode(file_get_contents("php://input"), true);

function encr($data) {
    $key = '$#@!YT^URjhgvCDRlkjinbKKLxfdZjOg';
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, 'Y5jghjg^524(@?Gh');
    $encrypted_hex = bin2hex($encrypted);
    return $encrypted_hex;
}

function decr($encrypted_hex) {
    $key = '$#@!YT^URjhgvCDRlkjinbKKLxfdZjOg';
    $iv = 'Y5jghjg^524(@?Gh'; // Same IV as used in encryption
    $encrypted = hex2bin($encrypted_hex); // Convert the hex back to binary
    $decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    return $decrypted;
}

$clearKeys = array(
    "keys" => array(
                 "01b1bafc996378ec0a7cb804aedca646"=>"e1669c99c646fbbe4d4ade8dfe3a3963",
          "0251a15c2cdf15cbd52edf4bb9f780b3"=>"2449c60d814ee1781f65358a5738fb54",
          "09713e21a670e4b135b79017eed9f0bc"=>"6b3b2be7607e4dde12c076d5d095794a",
          "0972df12392bc157c30987f6277d6488"=>"13b78754539049a146e0d348e0cf860a",
          "0995b5bb85c0e81480aa698e2cf7e019"=>"6500dfee09ba52224c95d16240d51476",
          "09cf6b5c15fbee993e587cd26149b219"=>"b04ff2c9e39cdcdcac7bb15d23f8d405",
          "09f81e30aa4c15537573f47cb5202b07"=>"69997f4fdc9a097f0a5cbd87afbd7d24",
          "0bd2fc447726fba972e8aef463ca1711"=>"722c73ba260b6cf47f49ae876f189593",
          "0c4dfd9a82658bd152d8e95f2cfde33f"=>"90baab6ab91d869e124a31f4b4174bc6",
          "0ddf587a9cfc3044e2b7e17dbf0072d9"=>"b176c76a615bb75c681258706af0f0a6",
          "18041ae9f0f710cc76665dd87186982d"=>"d6f793ef16083c382b12d33e7a3b9a3f",
          "18ef8412cdc5d4b84a7d6dd148c6b39b"=>"365453b1e6ae0c59ba7a3fc55970c8d4",
          "1add8b47dc11c0da47d16de5772f8712"=>"aa46dcc389dbcd6a881e0c61806f47be",
          "1c6db28d2f3a024669ecfcefb1d99a39"=>"cba6f642dac4e2489680631e4b7a0af2",
          "1f64dd4075448a8de146e59b3ca2b52a"=>"d4dcb74bca794665aaabfd3cc5dc0b58",
          "203f29aeb307dcf801b38746982d4344"=>"5af5d0716ee105bd78969d7929c66996",
          "219bd8d470a98ab38543b1258d045f7b"=>"26fe3073d542ac75c1f17ab74beb7565",
          "219f053b480a40ca4a53ec224ef14555"=>"58349d7f24097936ad0c6b7f693fd822",
          "2255edb0c35099fc39fc05f4a5ac723c"=>"fe0f260a3014c12b099398fc7149c1e1",
          "22638c5ac756363fdcd4cc7ce04189ae"=>"16104147a1df4f3a58d0cc19f0b1bece",
          "235f5d0a292c6b8b66aee0941ec6966b"=>"e0b87aafa3e55c15ce84f180c7a339d9",
          "250499e3be50d9b921c11d8c7ed8e37a"=>"131bbc411fe596dddec02cc21ee697d2",
          "2596470094cb3b50b8f55e4054a358d2"=>"c4812e0b76ac24a5f434cb8bbf1f0c38",
          "27cb3d1bff668be04ba6f47592879f1d"=>"f4115bb72d9b0900bf6c1a53344e24da",
          "2810e4710967572e0c7bbda0f0e66971"=>"f3932be11f8070d61dfc0dc09c78ed6d",
          "2880a0f803c857a156804c119b6c2de8"=>"85bf12c34c885dce04df8acd597cc55a",
          "29b7e74bd2682baae53b8357993e428d"=>"20b204b63b58380a23e87ceac5289547",
          "2b379f74ccd833308dc40e7c35e88fb0"=>"98145ba1d8e2f873ee033ff42af55d76",
          "2e6bcee1bb45fb790773d240b2649c7b"=>"65a62688b4bd4266e9aa729f920f05e1",
          "2e79d794d56a96616533e053aa41bd06"=>"5bedaf1660f0b28c0d1cb0bec04ee474",
          "3690e397abd66f0cb36b6caf0a4d2b62"=>"2413bc9dc5f9fd5a724ebb76d55b5d3b",
          "36b8d1d7098adcae2cb6d150271b5b54"=>"5fe87f36627c621439e8242dc9f4bfb3",
          "36e3d3ae1013cc749255e771746d148a"=>"57ebecba732a0a1408a7a3cf4e4ce8e6",
          "3b1958fb98e3a8553490130869d4436a"=>"dac7d0a94d6357221b7712dc865cb44d",
          "3eeb72d282b915b687934974c09559f9"=>"7e99064b1f55088b21bb3c831a3919d1",
          "3f4fb1fa044ec8ccd83fce01147a3ab3"=>"e54bfb9274d00ccf49af3cbb3a1f694e",
          "403e38b2dd03b13dc77c351d7ffa1c1b"=>"9463ac6df1e816fe3c441d86ee3d08b5",
          "429857d76d3026b160d1c707e98cb6d4"=>"a0c7cc8d78d42082af325149dbdd1aab",
          "436f9924c3a48b2c8c513e82028e0b2a"=>"6e234fb64720783687f02a7096f3737d",
          "48893e5316b416c1cf5f340b30678868"=>"2f015a4feb702ec4c981abe13980b7dd",
          "4bbe22bf55839086d322845db6f3e923"=>"64959ae30623394f0967b88331a98c7b",
          "534c2813de30a8c4c953657e8776b8da"=>"87f315db608c359976b088668a839312",
          "5365881d62aedd5433307e17d5a55ce1"=>"d0ddc29d4119b6beae750cd7beaf000d",
          "53ac148d2d6d2e020b63052d7b739372"=>"885574948840256d8c41c2fecebda14d",
          "5681ce57e1b1b01e3294b9f4dda3cd47"=>"4f0ce826162a2324e00b38037c66813a",
          "5803f3c583da2cbc8db8c97db5ca0f20"=>"290634b85d663603c518d270c92ede1e",
          "5886e8837a437e8796cd66e71a31acab"=>"107325f4f675c7a8691217e0e57fd194",
          "5b3ff946d2cbc8ccc1ac008496bc37d5"=>"47a66fa9d0f50053f727314e9972022b",
          "5d65fd470e6e8bc959334c997d34ff6a"=>"9540457565a81f1ead729c15ccddefa4",
          "5ead65dfeb91902eb2f06d1b5f5ac25e"=>"234348025ea02d38a05d274e31520cfa",
          "65bd7d18b13569e29c0ae7553b934d21"=>"23627608eb9d3905e9447253dd9f21a1",
          "667b331ff1d5b48e7b47fd4b565716f9"=>"45ba2e80c6608fe7641d0c7e69cea356",
          "6b06e230a2868bc977cecb14aff18e62"=>"87dd47ce5a56796eae97e5187f6c3ac0",
          "6b72e21202df96599bb2fc91c9cad3f3"=>"2c43f04d5b0a582bc64033ee7a520565",
          "6cd1a07908c73d65d949cea91bf287f9"=>"5895f1864e173964ebb77f3bb9c49575",
          "6e4e5edfec3bfb04c7048cd0cc117359"=>"23b580e054b9f7b0a69c5f8f8625a689",
          "7115025de6270ca26f5f78acb79594c0"=>"3f23476103abcd2f1fa405b4173cc4d0",
          "79b340b2b5f7c3c89951daabde7cdf97"=>"3e22bc39d22a7f8c3516f6b58b144668",
          "7eb320cf52674feb30d9cd0178072a6a"=>"f48cb148397c2f31c5f34ae1b3e144c8",
          "8408f2b8d80bdd171039c48a10b48b6e"=>"0cf4899a048134b4344a92480ba8dd14",
          "8600e338f781b71075588c8834f19940"=>"896466630d1237117acc14ef2690fd0d",
          "8a162b02b2e928fc721855a825055ab9"=>"56e1444ac82676e1fd998ef3c99c5781",
          "8f762d3b3483516558cbde2450a31177"=>"496d0603280e904a223caa65081e6dad",
          "9146bd4d5f5089e5ccfbca1edc7b5462"=>"1b511b2a4b0e57170422728a5181f56c",
          "945ecd10cbb4ea2cdbca7d836d3cb37b"=>"2e9b53cd33d9d1100000eaa1ddef5af3",
          "94e8de80d8d8159a2a92e75dc83ee207"=>"ff4634d4556cf7a8fafd2a3241097185",
          "973a107547b55b7ca288d93bd56013bb"=>"2b8dfcc73d86a2959d02cae357f62d6a",
          "992a7e66e068d554b10f2f10b39dcacb"=>"e36984f03c232c8775fa96c31eb678a3",
          "9ea92f310afa75d9a4811b9dbe8bb505"=>"12530ba3a026efb6f434d051265b04b6",
          "9f1e451a3d70f4edd8c1e065d10116fe"=>"c245f1e6b6ad077ccf71317fdad84bdf",
          "a02a29447436f098bb06abe7cb11c58a"=>"de860ee3485ba7866bd7d17df359f592",
          "a051972b0ef59afbdb90f5383574de02"=>"b3bbd80402f96f4cc89ea590c1dabc16",
          "a342e800e7d9e1751003ff41f299eb0d"=>"7fddf5b54f401ffd74a9ec9c0e7c7860",
          "a3fd8073fe9f0af9845efd2c80747590"=>"d784cb6bba8a130c303783fe93381f6b",
          "a4544bac30066e1a6380c60753901b30"=>"31b8c1b7f14bcc528ad9e386d06c3d94",
          "a4b0d01bb39006fec2e92033a7262e5b"=>"02424c17b4eb9cd19d6f204db874bf55",
          "a521d7d94563c18155c433f85e3c2ed3"=>"29cb9bc0170332b0ffab44bbd2d09910",
          "a7631d3ad183aaff6255e85a2e4a6562"=>"a5061952f9ab1e3d562f32bc55125084",
          "a8291de8b8740c7ed710bc2200128557"=>"e851cebf847b2d391fb34ec15352940b",
          "a8a602417affa09d98e024320e5535df"=>"026114dd15259eb5331cb20677a9e92b",
          "a8b598632e175e20be4430d1a67c1a5a"=>"a5f9a8e5920b547dccb33e71f4d93517",
          "a908bac4035ab54e3f0a265d7b2478c9"=>"43274338b768b62c5a0efcabcbaf3e28",
          "a9ad0ec5a9f6c1ef2b2b491fd2375a35"=>"9dd788aa636b777a2796f3293436e9b5",
          "aa4c1031e5dc2c9bb7035760b498d0c7"=>"cea7a602fa55da46c0985a1fecd867a4",
          "abfc480ae7920a3ebd9e99e7b9a0d3e2"=>"63a7fe4e7899ba2bc5bbd4307398f3ff",
          "ac4c36d336ed7710bd5a1a82738aa006"=>"8deb7a35b31b3ad09cc77d54db973edd",
          "ac8e0dd8ea8fdc9dc52e6856c0eaf9ba"=>"054d6605a69ac6684b82cf7d04d3ec16",
          "adbe19585c69116407a7c8957695af0a"=>"9fbda902374f47e21cff525e07cb8fb4",
          "ae508359fc9f70ce602094a432b8cacc"=>"f843004ae56813c6a71ee1a7519cf03c",
          "afd64884e2d2ab5e121208ac8f4eea21"=>"594cf0e6ccfe7216ff26cf658839b693",
          "b244ab0ddc38de333c1543362feda742"=>"3509585331575d80ef10024638fe2de3",
          "b29513abdd2fcb3adb3c033efd52005f"=>"87ec73876219cbcec10e57d1ac0eb0e5",
          "b4f62d9b5dc911695180120368c6a7ae"=>"231d9d76d8aa8b26327ffb89cda93699",
          "bafb1f53472647d230609f595685fe58"=>"e1625dcb5261cd0ad5e85910b78ee501",
          "bc0b3c0aa060a182510aa2e92c2e85cc"=>"4c241694a29ab5ddcce7548ad5943d21",
          "bf309f0ad95f5775660d0cf938685764"=>"e1eca0facbdbf97a2ed0cc9eaf6ca566",
          "bf99d18ae369d49cb8477455ab5beb8e"=>"1277ea199f0f8b8ee6942587a59f1460",
          "c1b4d41a750d55e393ca136e05cfa945"=>"c559f6a5264850b3ab978b869483f137",
          "c22e352d34bc174aee6563d8e130b97a"=>"3f0d883fed415e1a7006bf99e66dfc83",
          "c2ab84f4c18f92880eadad06744b9b97"=>"98968ad038d5a493054024d18d1889b6",
          "c58a42e8a3e75e4e0719cd78a9285b32"=>"22b8375cde62edf360a491005586bbc8",
          "c5bd577ce6d96db866a854e8d311ab23"=>"54e178a4f9d90a346fa522ecc7273a29",
          "c650b60a2380a90297165ac312aafc00"=>"96054bc44793e860075f35c375a4842e",
          "c851ff1093be8c33e58a42bfd457a404"=>"ea63875af607a8b933828653f2df4cc8",
          "ca16bcdf19417733051614aca488c2f9"=>"3c0d3e54f53570780df4a55aca6fd522",
          "cb197938c33a1057be063f1e7d7824b8"=>"36ef32188ed32dd9c0259f0bf3924762",
          "cc0ce9325bfb912a4addf4404cd10791"=>"37aab4a5afa952b9eac0c8ec7dcb4f2d",
          "ce18277648b5aad31cbf282e3534c800"=>"173cc4a2811d94c72e1b50be07ade60f",
          "d82b0ea4bd0ba68b82a10e0cc955ba9f"=>"9e9db2517d99d3c00c2653c5d41ae6da",
          "da095c049fe7f9b7799ed2dd332f4de9"=>"acabb77706afd213421c054f65b722db",
          "dd77b60f151d46df8f4d0fbe38f3a8a1"=>"ea109a5399ddada18eb6833acaa27079",
          "e02f1d5dd475ba0606327aa1c0b986d2"=>"df0cac0fdcf1d9bd5fa3ea73809a5410",
          "e4963e6cce8bc7c40495ffc282e67c5c"=>"783573e74938263c40048da45e00ab3f",
          "e579f063ca2f2108c4444383feeb7740"=>"3eea9904a53c005d74c2ece058dfe82b",
          "e612b9eef991f4922201eb6933f4fc9f"=>"7b40cb47e1e5d1c817818037c75a9836",
          "ec45f3e499f6a427004d11799aa5e28a"=>"918e7a95665e23a987c07b7448771c6a",
          "ec6c1a67d677babca9378f26ebb1d388"=>"4cacbaffdec7470afd62c439f40e4696",
          "ed610a537dad45d5258e4121453ec3f1"=>"14aa0ab231f31647e015368c42f2f7a9",
          "ef6bef909c3f7b644cedfdb288ec3b5b"=>"65eeb9ed9c709a886a30eac33f672b52",
          "effe505d252d2bb429505708a693786a"=>"d9e1f3cfd40e44dda40fdb2a95c642b7",
          "f0340c35e78ba096c04b353d4a0b6108"=>"99d326c1e578bc59a2ec166ea1516d79",
          "f067e27443af2dc5732d0c0f5fd7d635"=>"2330e4780e0d00e2844650fc61398151",
          "f0dad74ce622feec984a08ed23e8bc03"=>"27f9f4294c8deacb8f50a2cfb372c7c8",
          "f724a1b906b76968fd8e93a6c1adcbe2"=>"902ea6a5bfe9658b482b3c2f8cee0125",
          "f8ea159f0129e7bed05f81eb5288c1e0"=>"f6ad960cd231beb735920281d78a8968",
          "fb1f8d804939c732edc63782d8e33e26"=>"81699afb39dccfecf24b5f506a56d01e",
          "ff0b8c568f6f81bc654b40016f21616b"=>"dffbb56c311502d53ca4aa6b4eb0fd11",
          "54ab912d40dd2843fa4b98e1a685625f"=>"a709ce9a8f4781d6b17925805ba88060"
    ),
    "stream" => decr($postData['vidId'])
);

$jsonClearKeys = json_encode($clearKeys, JSON_PRETTY_PRINT);

// Encode JSON with Base64
$base64Encoded = base64_encode($jsonClearKeys);

echo $base64Encoded;
?>
