<?php 

$sealNames  = array("Sun","Dragon","Wind","Night","Seed","Serpent",
            "Worldbridger","Hand","Star","Moon","Dog","Monkey","Human",
            "Skywalker","Wizard","Eagle","Warrior","Earth","Mirror","Storm");

$sealColors = array("Yellow", "Red", "White", "Blue");

$toneNames  = array("Magnetic", "Lunar", "Electric", "Self-Existing", "Overtone", 
            "Rhythmic", "Resonant", "Galactic", "Solar", "Planetary", "Spectral", 
            "Crystal", "Cosmic");

$portals = array ("1","20","22","39","43","50","51","58","64",
    "69","72","77","85","88","93","96","106","107","108",
    "109","110","111","112","113","114","115","146","147",
    "148","149","150","151","152","153","154","155","165",
    "168","173","176","184","189","192","197","203","210",
    "211","218","222","239","241","260");


$seasons = array("2","10","30","50","55","75","95","115","120",
    "140","160","180","185","205","225","245","250");

$dayNames = array("Dali", "Seli", "Gamma", "Kali", "Alpha", "Limi", "Silio");

$sealPoem1 = array ("Enlighten", "Nurture", "Communicate", "Dream", "Target", "Survive", 
    "Equalize", "Know", "Beautify", "Purify", "Love", "Play", "Influence", 
    "Explore", "Enchant", "Create", "Question", "Evolve", "Reflect", "Catalyse");

$sealPoem2 = array ("Life", "Being", "Breath", "Intuition", "Awareness", "Instinct", 
    "Opportunity", "Healing", "Art", "Flow", "Loyalty", "Illusion", "Wisdom", 
    "Wakefullness", "Receptivity", "Mind", "Fearlessness", "Synchronicity", "Order", 
    "Energy");

$sealPoem3 = array ("Matrix", "Input", "Input", "Input", "Input", "Store", "Store", 
    "Store", "Store", "Process", "Process", "Process", "Process", "Output", "Output", 
    "Output", "Output", "Matrix", "Matrix", "Matrix");

$sealPoem4 = array ("Universal Fire", "Birth", "Spirit", "Abundance", "Flowering", 
    "Life Force", "Death", "Accomplishment", "Elegance", "Universal Water", 
    "Heart", "Magic", "Free Will", "Space", "Timelessness", "Vision", "Intelligence", 
    "Navigation", "Endlessness", "Self-generation");

$guidedByPoem = array ("Universal Fire", "Birth", "Spirit", "Abundance", "Flowering", 
    "Life Force", "Death", "Accomplishment", "Elegance", "Universal Water", "Heart", 
    "Magic", "Free Will", "Space", "Timelessness", "Vision", "Intelligence", "Navigation", 
    "Endlessness", "Self-generation");

$tonePoem1 = array ("","Unify", "Polarize", "Activate", "Define", "Empower", 
    "Organize", "Channel", "Harmonize", "Pulse", "Perfect", "Dissolve", "Dedicate", 
    "Endure");

$tonePoem2 = array ("","Attracting", "Stabilizing", "Bonding", "Measuring", 
    "Commanding", "Balancing", "Inspiring", "Modeling", "Realizing", "Producing", 
    "Releasing", "Universalizing", "Transcending");

$tonePoem3 = array ("0","Purpose", "Challenge", "Service", "Form", "Radiance", 
    "Equality", "Attunement", "Integrity", "Intention", "Manifestation", "Liberation", 
    "Cooperation", "Presence");


$yearConversion = array(
    array(217, array(2065, 2013, 1961, 1909)),
    array(112, array(2064, 2012, 1960, 1908)),    
    array(7, array(2063, 2011, 1959, 1907)),
    array(162, array(2062, 2010, 1958, 1906)),
    array(57, array(2061, 2009, 1957, 1905)),
    array(212, array(2060, 2008, 1956, 1904)),       
    array(107, array(2059, 2007, 1955, 1903)),             
    array(2, array(2058, 2006, 1954, 1902)),
    array(157, array(2057, 2005, 1953, 1901)),
    array(52, array(2056, 2004, 1952, 1900)),
    array(207, array(2055, 2003, 1951, 1899)),
    array(102, array(2054, 2002, 1950, 1898)),
    array(257, array(2053, 2001, 1949, 1897)),            
    array(152, array(2052, 2000, 1948, 1896)),              
    array(47, array(2051, 1999, 1947, 1895)),
    array(202, array(2050, 1998, 1946, 1894)),
    array(97, array(2049, 1997, 1945, 1893)),  
    array(252, array(2048, 1996, 1944, 1892)),    
    array(147, array(2047, 1995, 1943, 1891)),  
    array(42, array(2046, 1994, 1942, 1890)),  
    array(197, array(2045, 1993, 1941, 1889)),    
    array(92, array(2044, 1992, 1940, 1888)),  
    array(247, array(2043, 1991, 1939, 1887)),
    array(142, array(2042, 1990, 1938, 1886)),  
    array(37, array(2041, 1989, 1937, 1885)),  
    array(192, array(2040, 1988, 1936, 1884)),  
    array(87, array(2039, 1987, 1935, 1883)),    
    array(242, array(2038, 1986, 1934, 1882)),  
    array(137, array(2037, 1985, 1933, 1881)),  
    array(32, array(2036, 1984, 1932, 1880)),    
    array(187, array(2035, 1983, 1931, 1879)),  
    array(82, array(2034, 1982, 1930, 1878)),    
    array(237, array(2033, 1981, 1929, 1877)),      
    array(132, array(2032, 1980, 1928, 1876)),  
    array(27, array(2031, 1979, 1927, 1875)),  
    array(182, array(2030, 1978, 1926, 1874)),  
    array(77, array(2029, 1977, 1925, 1873)),  
    array(232, array(2028, 1976, 1924, 1872)),      
    array(127, array(2027, 1975, 1923, 1871)),
    array(22, array(2026, 1974, 1922, 1870)),  
    array(177, array(2025, 1973, 1921, 1869)),
    array(72, array(2024, 1972, 1920, 1868)),  
    array(227, array(2023, 1971, 1919, 1867)),  
    array(122, array(2022, 1970, 1918, 1866)),
    array(17, array(2021, 1969, 1917, 1865)),
    array(172, array(2020, 1968, 1916, 1864)),  
    array(67, array(2019, 1967, 1915, 1863)),  
    array(222, array(2018, 1966, 1914, 1862)),
    array(117, array(2017, 1965, 1913, 1861)),  
    array(12, array(2016, 1964, 1912, 1860)),    
    array(167, array(2015, 1963, 1911, 1859)),  
    array(62, array(2014, 1962, 1910, 1858))
);

$monthConversion = array (0,31,59,90,120,151,181,212,243,13,44,74);

$gregorianMonths = array (
    1 => 31,
    2 => 28,
    3 => 31,
    4 => 30,
    5 => 31,
    6 => 30,
    7 => 31,
    8 => 31,
    9 => 30,
    10 => 31,
    11 => 30,
    12 => 31
)

?>