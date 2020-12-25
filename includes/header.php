   <div class="Header__header Header__defaultContent" id="headerContainer">
            <div class="Header__headerBg" style="background-position: 100% 45%;">
                <div class="Header__bgColor"></div>
            </div>

            <div class="Header__menuWrapper">
                    <div id="navBarContainer" class="Header__menuBox" style="max-width: 80rem;">
                        <div class="Header__logoPart">
                            <a class="Header__logoimg" rel="noopener noreferrer"><img alt="" class="Header__logo" src="images/logo.png"></a>
                            <span class="Header__logotxt">PeerXP Support</span>
                        </div>
                        <div class="Header__navbtn">
                            <div id="menuBarContainer" class="Header__menuClick">
                                <span class="Header__menu"></span>
                            </div>
                            <div class="Header__responsivefreez"></div>
                            <ul class="Header__nav">
                                <?php if(!empty($_SESSION['USER_ID'])){ ?><li class="Header__menuList LoginDetail__signin commonStyle__cursor commonStyle__overflowDotted <?php if($page=="add_ticket"){?>LoginDetail__active<?php } ?>" id="portal_tabHome"><a class="Header__link" title="Home" role="tab" aria-selected="false" href="myarea" id="Home_tab">Home</a></li>
                                <li class="Header__menuList LoginDetail__signin commonStyle__cursor commonStyle__overflowDotted <?php if($page=="myarea"){?>LoginDetail__active<?php } ?>" id="portal_tabCases"><a class="Header__link" title="My" area="" role="tab" aria-selected="false" href="myarea" id="Cases_tab">My Area</a></li><?php } ?>
                                <li class="Header__menuList " id="portal_tabSolutions"><a class="Header__link" title="Knowledge" base="" role="tab" aria-selected="false" href="#" id="Solutions_tab">Knowledge Base</a></li>
                               <?php if(empty($_SESSION['USER_ID'])){  ?>   <li class="Header__menuList Header__hideTab" id="portal_tabCommunity"><a class="Header__link" title="Community" role="tab" aria-selected="false" href="#" id="Community_tab">Community</a></li>
                                <li id="logoutDetails"><ul data-reactroot="" class="LoginDetail__LogoutDetail commonStyle__dFlex commonStyle__ulAlign">
								<li id="portal_tabsignin" class="LoginDetail__signin commonStyle__cursor commonStyle__overflowDotted LoginDetail__active"><a data-id="tab_signin" class="LoginDetail__tabLink signinLink" rel="noopener" href="index">Sign In</a></li>
<li id="portal_tabsignup" class="LoginDetail__signup commonStyle__cursor commonStyle__overflowDotted"><a data-id="tab_signup" class="LoginDetail__tabLink signupLink" href="#" rel="noopener">Sign Up</a></li></ul></li><?php } ?>
								
								  <?php if(!empty($_SESSION['USER_ID'])){  
							   $user_name=strtoupper(substr($_SESSION['FULL_NAME'],0,2));   ?>
							   <style>
							   .AvatarText__circle {
    border: 0.0625rem solid #dadada;
    border-radius: 50%;
    background-color: #fff;
}
.AvatarText__small {
    height: 2.1875rem;
    width: 2.1875rem;
}
.AvatarText__avatarText {
    overflow: hidden;
    text-transform: uppercase;
    color: #666;
}
							   </style>
							    <li class="List__listItems commonStyle__inlineBlock">
								<li class="nav-item dropdown u-pro">
								 <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                    class="hidden-md-down"> </span> </a>
									<div class="dropdown-menu dropdown-menu-right animated flipInY">

                                <div class="dropdown-divider"></div>
                         
                                <a href="logout" class="dropdown-item"><i class="fa fa-power-off"></i>
                                    Logout</a>
                           
                            </div>
							</li>
<span>
<div class="AvatarText__avatarText commonStyle__dFlexJcAc AvatarText__small AvatarText__circle enduser_avatar"><?php echo $user_name;  ?></div>
</span>
</li>
							   <?php } ?>
                                <li id="userPreference"><div data-reactroot="" class="CustomizeContainer__CustomizeOption commonStyle__positionRel"><div data-id="customize" class="CustomizeContainer__aPlus commonStyle__cursor aPlusIcon"><svg class="Icon__icon commonStyle__positionRel commonStyle__inlineBlock Icon__xSmall"><use xlink:href="#txtBig"></use></svg></div><div class="CustomizeContainer__content Popup__hide"><span class="Popup__arrow Popup__arrowbottom"></span><div class="CustomizeContainer__customizeContent"><div class="CustomizeContainer__field CustomizeContainer__fontCustom commonStyle__dFlex commonStyle__alignCenter"><div class="CustomizeContainer__label">Font Size</div><div class="CustomizeContainer__fontScale commonStyle__dFlex"><span data-id="font_dec" class="CustomizeContainer__fontInc commonStyle__cursor commonStyle__tAlignCenter ">-</span><span data-id="font_inc" class="CustomizeContainer__fontDec commonStyle__cursor commonStyle__tAlignCenter ">+</span></div></div><div class="CustomizeContainer__field"><div class="CustomizeContainer__label">Layout</div><div class="CustomizeContainer__layoutChange commonStyle__dFlex CustomizeContainer__pointEvenNone"><span data-id="layout_left" class="CustomizeContainer__layout1 "></span><span data-id="layout_right" class="CustomizeContainer__layout2 CustomizeContainer__layoutSelect"></span></div></div><div class="CustomizeContainer__field"><div class="CustomizeContainer__columnReverse commonStyle__dFlex commonStyle__alignCenter"><div class="CustomizeContainer__label">Full Width</div><div data-id="full_width" class="Switch__toggleOn Switch__switchToggle commonStyle__verticalMiddle commonStyle__positionRel commonStyle__cursor"><span class="Switch__switchOn Switch__switchMove commonStyle__inlineBlock commonStyle__positionAbs"></span></div></div></div></div></div></div></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="titleSearch" class="Header__titleSearchWrapper" style="max-width: 80rem;">
                        <div class="Header__titleSearchBox" style="min-width: 100%;">
                            <div class="Header__titleDescription">
                                <h1 class="Header__welcomeTitle">Welcome to PeerXP Support</h1>
                                <div class="Header__welcomeDescription">Search our knowledge base or submit a ticket.</div>
                            </div>
                            <div id="bannerContainer" class="Header__banneralt" >
                                <div class="Header__searchSubCont">
                                    <div id="searchBtnContainer" class="Header__searchalt" style="max-width: 80rem;">
                                        <div id="searchContainer" class="Header__searchLink"><div data-reactroot="" class="SearchCon__searchCon commonStyle__positionRel"><div class="SearchBox__searchpart" id="searchContainer1"><input class="undefined " data-id="searchInput" id="autoSearchContainer" value="" placeholder="Search articles" autocomplete="off"><!-- react-empty: 4 --></div></div></div>
                                        <div class="Header__panelbtns">
                                            <div id="plusBtn" class="Header__cdstretchynav">
                                                <div class="Header__overlayresponav"></div>
                                                <span class="Header__cdnavtrigger"></span>
                                                <div class="Header__container">
                                                    <ul class="Header__containerUl" style="position:relative;left:-45px;" id="btnaddticket">
                                                        <li class="Header__containerLi" id="new_ticket_btn">
                                                    <a class="Header__containerLink" id="new_ticket_button" href="add_ticket">
                                                                <span class="Header__tClr"> Add Ticket </span>
                                                                <span class="Header__dropicon">
                                                                    <svg class="Header__iconSize">
                                                                        <use xlink:href="#ticket"></use>
                                                                    </svg>
                                                                </span>
                                                         </a>
                                                         </li>  
                                                    </ul>
                                                    <span class="Header__stretchynavbg"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="breadCrumbsContainer" class="Header__breadcrumbs"><div data-reactroot=""><div class="BreadCrumbs__breadcrumbsView"><ul class="BreadCrumbs__breadcrumbList"><li class="BreadCrumbs__breadCrumbText"><span data-id="_breadcrumb_0" id="txttxt">Sign In</span></li></ul></div><div class="BreadCrumbs__clear"></div></div></div>
                            </div>
                        </div>
                    </div>
        </div>