-- 
-- Structure de la table `cleAssociation`
-- 

DROP TABLE IF EXISTS `cleAssociation`;
CREATE TABLE IF NOT EXISTS `cleAssociation` (
  `imagecle` varchar(25) NOT NULL default '',
  `image` varchar(5) NOT NULL default '0',
  `date` int(11) NOT NULL default '0'
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Structure de la table `imageAssociation`
-- 

DROP TABLE IF EXISTS `imageAssociation`;
CREATE TABLE IF NOT EXISTS `imageAssociation` (
  `image` smallint(6) NOT NULL default '0',
  `valeur` varchar(6) NOT NULL default ''
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Structure de la table `index_forum`
-- 

DROP TABLE IF EXISTS `index_forum`;
CREATE TABLE IF NOT EXISTS `index_forum` (
  `id` int(11) NOT NULL auto_increment,
  `nom_forum` varchar(30) NOT NULL default '',
  `nb_sujet` int(11) NOT NULL default '0',
  `description` varchar(250) NOT NULL default '',
  KEY `id` (`id`)
) TYPE=MyISAM AUTO_INCREMENT=2147483647 ;

-- --------------------------------------------------------

-- 
-- Structure de la table `messages_forum`
-- 

DROP TABLE IF EXISTS `messages_forum`;
CREATE TABLE IF NOT EXISTS `messages_forum` (
  `id` int(11) NOT NULL auto_increment,
  `no_suj` int(11) NOT NULL default '0',
  `rplya` int(11) NOT NULL default '0',
  `no_forum` int(11) NOT NULL default '0',
  `date_message` date default NULL,
  `titre` varchar(50) NOT NULL default '',
  `pseudo` varchar(20) NOT NULL default '',
  `mail` varchar(50) NOT NULL default '',
  `message` text NOT NULL,
  KEY `id` (`id`)
) TYPE=MyISAM PACK_KEYS=0 AUTO_INCREMENT=1905 ;
        