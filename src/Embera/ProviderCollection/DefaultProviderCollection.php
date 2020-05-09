<?php
/**
 * DefaultProviderCollection.php
 *
 * @package Embera
 * @author Michael Pratt <yo@michael-pratt.com>
 * @link   http://www.michael-pratt.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Embera\ProviderCollection;

/**
 * Basically its a wrapper for the ProvidercollectionAdapter but defines the
 * default providers supported by the library
 */
class DefaultProviderCollection extends ProviderCollectionAdapter
{
    /** inline {@inheritdoc} */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->registerProvider([
            'TwentyThreeHq',
            'Adways',
            'Altru',
            'AmCharts',
            'Animoto',
            'Apester',
            'Archivos',
            'Audioboom',
            'AudioClip',
            'Audiomack',
            'Avocode',
            'Backtracks',
            'BeautifulAI',
            'BlackfireIO',
            'Blogcast',
            'Buttondown',
            'Byzart',
            'Ceros',
            'ChartBlocks',
            'Chirbit',
            'CircuitLab',
            'Clyp',
            'CodeHS',
            'CodePen',
            'Codepoints',
            'CodeSandbox',
            'Commaful',
            'Coub',
            'DailyMotion',
            'Deseretnews',
            'Deviantart',
            'Didacte',
            'Digiteka',
            'DocDroid',
            'DotSUB',
            'EduMedia',
            'Ethfiddle',
            'Eyrie',
            'Facebook',
            'Fader',
            'FaithLifeTV',
            'Fitapp',
            'FITE',
            'Flat',
            'Flickr',
            'Flourish',
            'Fontself',
            'GeographUk',
            'GeographCI',
            'GeographDE',
            'GettyImages',
            'Gfycat',
            'Giphy',
            'GloriaTV',
            'Gyazo',
            'Hearthis',
            'Huffduffer',
            'Hulu',
            'iFixit',
            'IHeartRadio',
            'Infogram',
            'Infoveave',
            'Injurymap',
            'Inoreader',
            'Instagram',
            'Issuu',
            'Jovian',
            'KakaoTV',
            'Kickstarter',
            'Kidoju',
            'KirimEmail',
            'Kit',
            'Kitchenbowl',
            'Knacki',
            'LearningApps',
            'LillePod',
            'Livestream',
            'Ludus',
            'Mathembed',
            'Matterport',
            'MediaLab',
            'MedienArchivKuenste',
            'MermaidInk',
            'Meetup',
            'MessesInfo',
            'MixCloud',
            'ModeloIO',
            'MusicboxManiacs',
            'Namchey',
            'Nanoo',
            'NaturalAtlas',
            'Nfb',
            'Omniscope',
            'OnSizzle',
            'OraTV',
            'Orbitvu',
            'Outplayed',
            'OverflowIO',
            'Oz',
            'Padlet',
            'Pastery',
            'Pixdor',
            'Playbuzz',
            'Podbean',
            'PolariShare',
            'Polldaddy',
            'Portfolium',
            'Posixion',
            'RadioPublic',
            'Reddit',
            'ReleaseWire',
            'Replit',
            'ReverbNation',
            'Roomshare',
            'RoosterTeeth',
            'Rumble',
            'SapoVideos',
            'ScreenNine',
            'Screencast',
            'ScribbleMaps',
            'Scribd',
            'SendToNews',
            'Shortnote',
            'Shoudio',
            'ShowTheWay',
            'Simplecast',
            'Sketchfab',
            'Slideshare',
            'SmashNotes',
            'Smugmug',
            'SocialExplorer',
            'SongLink',
            'SoundCloud',
            'Soundsgood',
            'SpeakerDeck',
            'Spotful',
            'Spotify',
            'Spreaker',
            'StandfordDigitalRepository',
            'Streamable',
            'Sutori',
            'Sway',
            'Ted',
            'TheNewYorkTimes',
            'TheySaidSo',
            'Tickcounter',
            'Toornament',
            'Tuxx',
            'Tvcf',
            'Twitch',
            'Twitter',
            'Typecast',
            'Typlog',
            'UniversitePantheonSorbonne',
            'UniversityCambridgeMap',
            'UstreamTV',
            'Ustudio',
            'Veer',
            'Verse',
            'Vimeo',
            'Viously',
            'Vlipsy',
            'Vlive',
            'WaveVideo',
            'VoxSnap',
            'Wistia',
            'Wizer',
            'Wokwi',
            'Wordpress',
            'Youtube',
            'Zingsoft',
            'ZnipeTV',
            'Zoomable',
        ]);
    }
}
