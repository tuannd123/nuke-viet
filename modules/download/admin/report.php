<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES.,JSC. All rights reserved
 * @Createdate 2-9-2010 14:43
 */

if ( ! defined( 'NV_IS_FILE_ADMIN' ) ) die( 'Stop!!!' );

// Check file error
if ( $nv_Request->isset_request( 'linkcheck', 'post' ) )
{
    if ( ! defined( 'NV_IS_AJAX' ) ) die( 'Wrong URL' );

    $id = $nv_Request->get_int( 'id', 'post', 0 );

    if ( ! $id )
    {
        die( "BAD_" . $id );
    }

    $query = "SELECT `fileupload`, `linkdirect` FROM `" . NV_PREFIXLANG . "_" . $module_data . "` WHERE `id`=" . $id;
    $result = $db->sql_query( $query );
    $numrows = $db->sql_numrows( $result );
    if ( $numrows != 1 )
    {
        die( "BAD_" . $id );
    }

    list( $fileupload, $linkdirect ) = $db->sql_fetchrow( $result );

    $links = array();

    if ( ! empty( $fileupload ) )
    {
        $fileupload = explode( "[NV]", $fileupload );
        $fileupload = array_map( "trim", $fileupload );
        foreach ( $fileupload as $file )
        {
            if ( ! empty( $file ) )
            {
                $links[] = NV_MY_DOMAIN . NV_BASE_SITEURL . NV_UPLOADS_DIR . $file;
            }
        }
    }

    if ( ! empty( $linkdirect ) )
    {
        $linkdirect = explode( "[NV]", $linkdirect );
        $linkdirect = array_map( "trim", $linkdirect );
        foreach ( $linkdirect as $ls )
        {
            if ( ! empty( $ls ) )
            {
                $ls = explode( "<br />", $ls );
                $ls = array_map( "trim", $ls );

                foreach ( $ls as $l )
                {
                    if ( ! empty( $l ) )
                    {
                        $links[] = $l;
                    }
                }
            }
        }
    }

    if ( ! empty( $links ) )
    {
        foreach ( $links as $link )
        {
            if ( ! nv_is_url( $link ) )
            {
                die( "NO_" . $id );
            }
            if ( ! nv_check_url( $link ) )
            {
                die( "NO_" . $id );
            }
        }
    }

    die( "OK_" . $id );
}

//Del
if ( $nv_Request->isset_request( 'del', 'post' ) )
{
    if ( ! defined( 'NV_IS_AJAX' ) ) die( 'Wrong URL' );

    $id = $nv_Request->get_int( 'id', 'post', 0 );

    if ( ! $id )
    {
        die( "NO" );
    }

    $query = "SELECT * FROM `" . NV_PREFIXLANG . "_" . $module_data . "_report` WHERE `fid`=" . $id;
    $result = $db->sql_query( $query );
    $numrows = $db->sql_numrows( $result );
    if ( $numrows != 1 )
    {
        die( "NO" );
    }

    $sql = "DELETE FROM `" . NV_PREFIXLANG . "_" . $module_data . "_report` WHERE `fid`=" . $id;
    $db->sql_query( $sql );

    die( "OK" );
}

//All del
if ( $nv_Request->isset_request( 'alldel', 'post' ) )
{
    $sql = "DELETE FROM `" . NV_PREFIXLANG . "_" . $module_data . "_report`";
    $db->sql_query( $sql );

    die( "OK" );
}

//List
$page_title = $lang_module['download_report'];

$sql = "SELECT a.post_time AS post_time, a.post_ip AS post_ip, b.id AS id, b.title AS title, b.catid AS catid FROM `" . NV_PREFIXLANG . "_" . $module_data . "_report` a INNER JOIN `" . NV_PREFIXLANG . "_" . $module_data . "` b ON a.fid=b.id ORDER BY a.post_time DESC";
$result = $db->sql_query( $sql );
$num = $db->sql_numrows( $result );
if ( ! $num )
{
    $contents = "<div style=\"padding-top:15px;text-align:center\">\n";
    $contents .= "<strong>" . $lang_module['report_empty'] . "</strong>";
    $contents .= "</div>\n";
    $contents .= "<meta http-equiv=\"refresh\" content=\"2;url=" . NV_BASE_ADMINURL . "index.php?" . NV_NAME_VARIABLE . "=" . $module_name . "\" />";

    include ( NV_ROOTDIR . "/includes/header.php" );
    echo nv_admin_theme( $contents );
    include ( NV_ROOTDIR . "/includes/footer.php" );
    exit;
}

$listcats = nv_listcats( 0 );
if ( empty( $listcats ) )
{
    Header( "Location: " . NV_BASE_ADMINURL . "index.php?" . NV_NAME_VARIABLE . "=" . $module_name . "&" . NV_OP_VARIABLE . "=cat&add=1" );
    exit();
}

$array = array();

while ( $row = $db->sql_fetchrow( $result ) )
{
    $array[$row['id']] = array( //
        'id' => ( int )$row['id'], //
        'title' => $row['title'], //
        'cattitle' => $listcats[$row['catid']]['title'], //
        'catlink' => NV_BASE_ADMINURL . "index.php?" . NV_NAME_VARIABLE . "=" . $module_name . "&amp;catid=" . $row['catid'], //
        'post_time' => nv_date( "d/m/Y H:i", $row['post_time'] ), //
        'post_ip' => $row['post_ip'] //
        );
}

$xtpl = new XTemplate( "report.tpl", NV_ROOTDIR . "/themes/" . $global_config['module_theme'] . "/modules/" . $module_file );
$xtpl->assign( 'LANG', $lang_module );
$xtpl->assign( 'GLANG', $lang_global );
$xtpl->assign( 'TABLE_CAPTION', $page_title );

if ( ! empty( $array ) )
{
    $a = 0;
    foreach ( $array as $row )
    {
        $xtpl->assign( 'CLASS', $a % 2 == 1 ? " class=\"second\"" : "" );
        $xtpl->assign( 'ROW', $row );
        $xtpl->assign( 'EDIT_URL', NV_BASE_ADMINURL . "index.php?" . NV_NAME_VARIABLE . "=" . $module_name . "&amp;edit=1&amp;id=" . $row['id'] );
        $xtpl->parse( 'main.row' );
        ++$a;
    }
}

$xtpl->parse( 'main' );
$contents = $xtpl->text( 'main' );

include ( NV_ROOTDIR . "/includes/header.php" );
echo nv_admin_theme( $contents );
include ( NV_ROOTDIR . "/includes/footer.php" );

?>